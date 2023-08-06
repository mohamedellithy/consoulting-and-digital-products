<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplicationOrder;
use App\Models\Product;
use App\Models\Service;
use App\Models\Order;
use App\Models\User;
use App\Models\Page;
use Illuminate\Support\Str;
use App\services\ThawaniPayment;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Review;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\ApplicationServiceRequest;
class FrontController extends Controller
{
    //

    public function index(){
        $products = Cache::rememberForever('all-products',function(){
            return $products = Product::all();
        });

        $services = Cache::rememberForever('all-services',function(){
            return $products = Service::all();
        });
        return view('pages.front.index',compact('products','services'));
    }

    public function shop(){
        $products = Product::query();

        $products->with('image_info')->withCount('reviews')->withAvg('reviews','degree')->where('status','active');

        if(request('search')):
            $products = $products->where('name', 'like', '%' . request('search') . '%')->orWhere('name', 'like', '%' . request('search') . '%');
        endif;

        if(request('order_by')):
            if(request('order_by') == 'high-price'):
                $products = $products->orderBy('price','desc');
            elseif(request('order_by') == 'low-price'):
                $products = $products->orderBy('price','asc');
            endif;
        else:
            $products = $products->orderBy('created_at', 'desc');
        endif;

        $products = $products->paginate(10);

        return view('pages.front.shop.products',compact('products'));
    }

    public function single_product($slug){
        $product    = Product::with('image_info','downloads','reviews')->withCount('reviews')->withAvg('reviews','degree')->where('slug',$slug)->first();
        $reviews    = Review::query()->where([
            'product_id' => $product->id
        ]);

        $reviews->whereNull('replay_on');

        $reviews->where('status','active');

        if(auth()->user()):
            $reviews->where('customer_id','!=',auth()->user()->id);
        endif;
        $reviews = $reviews->orderBy('created_at','desc')->paginate(5);
        return view('pages.front.shop.product-details',compact('product','reviews'));
    }

    public function ajax_paginate_review_lists(){
        $reviews    = Review::query()->where([
            'product_id' => request('product_id')
        ]);

        $reviews->whereNull('replay_on');

        $reviews->where('status','active');

        if(auth()->user()):
            $reviews->where('customer_id','!=',auth()->user()->id);
        endif;

        $reviews = $reviews->orderBy('created_at','desc')->offset(request('offset'))->limit(5)->get();

        return response()->json([
            'status'  => 'success',
            '_result' => view('partials.reviews_list',compact('reviews'))->render()
        ]);
    }

    public function services(){
        $services = Service::query();
        $services->with('image_info');
        $services = $services->paginate(10);

        return view('pages.front.services.all-services',compact('services'));
    }

    public function single_service($slug){
        $service  = Service::with('image_info')->where('slug',$slug)->first();
        return view('pages.front.services.show-service',compact('service'));
    }

    public function application_submit(ApplicationServiceRequest $request,$id){
        $request->merge([
           'customer_id' => auth()->user() ? auth()->user()->id : null,
           'service_id'  => $id
        ]);

        $request->merge([
            'phone' => request('phone_code').request('phone')
        ]);

        $application_service = ApplicationOrder::create($request->only([
            'customer_id',
            'service_id',
            'name',
            'email',
            'phone',
            'subscriber_notic'
        ]));

        flash()->success('تم ملئ نموذج طلب التسعير بنجاح');
        return redirect()->back();
    }

    public function my_account(){
        return view('pages.front.my-account.index');
    }

    public function my_orders(){
        $orders = Order::with('order_items','order_items.product')->where('customer_id',auth()->user()->id)->paginate(10);
        return view('pages.front.my-account.orders',compact('orders'));
    }

    public function my_services(){
        $applications = ApplicationOrder::with('customer','service')->where('customer_id',auth()->user()->id)->paginate(10);
        return view('pages.front.my-account.services',compact('applications'));
    }

    public function my_downloads(){
        $orders = Order::with('order_items','order_items.product','order_items.product.downloads')->whereHas('order_items.product.downloads')->where('customer_id',auth()->user()->id)->paginate(10);
        return view('pages.front.my-account.downloads',compact('orders'));
    }

    public function my_single_download($order_id){
        $order = Order::with('order_items','order_items.product','order_items.product.downloads')->whereHas('order_items.product.downloads')->where([
            'customer_id' => auth()->user()->id,
            'id'          => $order_id
        ])->first();
        return view('pages.front.my-account.download-details',compact('order'));
    }

    public function setting_account(){
        return view('pages.front.my-account.account-settings');
    }

    public function update_account(Request $request){

        $request->validate([
            'phone' => 'unique:users,phone,'.auth()->user()->id
        ]);

        $data = [
            'name'     => $request->input('name'),
            'phone'    => $request->input('phone')
        ];

        if(request('password')):
            $data['password'] = Hash::make($request->input('password'));
        endif;

        User::where('id',auth()->user()->id)->update($data);

        flash()->success('Account is updated successfully');

        return back();
    }

    public function buy_now(Request $request){
        // here add payment
        if($request->has('product_id')):
            $product = Product::find($request->input('product_id'));
            $order   = Order::Create([
                'order_no'     => Str::random(5).auth()->user()->id,
                'customer_id'  => auth()->user()->id,
                'order_total'  => $product->price * $request->input('qty'),
                'order_status' => 'pending'
            ]);

            $order->order_items()->create([
                'product_id' => $product->id,
                'quantity'   => $request->input('qty')
            ]);
        elseif($request->has('order_id')):
            $order = Order::where([
                'id'    => $request->input('order_id'),
                'customer_id' => auth()->user()->id
            ])->first();
        endif;

        flash()->success('order created successfully');

        $payment = new ThawaniPayment();
        $payment->create_portal_payment($order);
    }

    public function payment_success(){
        $success = new ThawaniPayment();
        $success->success_payment();
        return $success;
    }

    public function thank_you_payment($order_no = null){
        $order = Order::with('payment','order_items','order_items.product','order_items.product.downloads')->where('order_no',$order_no)->first();
        return view('pages.front.orders.thank_you',compact('order'));
    }

    public function download_attachments(Request $request){
        $order = Order::where([
            "id"          => $request->input('order_id'),
            "customer_id" => auth()->user()->id
        ])->first();

        $download_path = "";
        $file_name     = $order->order_items->product->name;
        if($order):
            if($order->order_status == 'completed' && $order->payment->status_payment == 'paid'):
                $attachments        = GetAttachments($order->order_items->product->downloads->download_attachments_id);
                if(count($attachments) > 1):
                    $file_name = $order->order_items->product->name.'_'.$order->order_no.'.zip';
                    $zip = new \ZipArchive;
                    if(File::exists(public_path('downloads/'.$file_name))):
                        File::delete(public_path('downloads/'.$file_name));
                    endif;
                    if($zip->open(public_path('downloads/'.$file_name), \ZipArchive::CREATE) === TRUE):
                        foreach($attachments as $attachment):
                            $zip->addFile(public_path('storage/'.$attachment->path),$attachment->name);
                        endforeach;
                        $zip->close();
                    endif;
                    $download_path = public_path('downloads/'.$file_name);
                else:
                    foreach($attachments as $attachment):
                        $file_name     = $file_name.'_'.$attachment->name;
                        $download_path = public_path('storage/'.$attachment->path);
                    endforeach;
                endif;

                return Response::download($download_path,$file_name);
            endif;
        endif;
    }

    public function contact_us(){
        $page = Page::where('slug','contact-us')->first();
        return view('pages.front.contact-us',compact('page'));
    }

    public function custom_page($slug){
        $page = Page::where('slug',$slug)->first();
        return view('pages.front.custom_page',compact('page'));
    }

    public function add_review_on_product(Request $request ,$id){
        $review = Review::updateOrCreate([
            'customer_id' => auth()->user()->id,
            'product_id'  => $id
        ],[
            'degree' => $request->input('degree'),
            'review' => $request->input('review')
        ]);

        flash()->success('تم اضافة تقيمك بنجاح');
        return back();
    }
}
