<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplicationOrder;
use App\Models\Product;
use App\Models\Service;
use App\Models\Order;
class FrontController extends Controller
{
    //

    public function index(){
        return view('pages.front.index');
    }

    public function shop(){
        $products = Product::query();

        $products->with('image_info')->where('status','active');

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
        $product  = Product::with('image_info','downloads')->where('slug',$slug)->first();
        return view('pages.front.shop.product-details',compact('product'));
    }

    public function services(){
        $services = Service::query();

        $services->with('image_info');

        // if(request('search')):
        //     $products = $products->where('name', 'like', '%' . request('search') . '%')->orWhere('name', 'like', '%' . request('search') . '%');
        // endif;

        // if(request('order_by')):
        //     if(request('order_by') == 'high-price'):
        //         $products = $products->orderBy('price','desc');
        //     elseif(request('order_by') == 'low-price'):
        //         $products = $products->orderBy('price','asc');
        //     endif;
        // else:
        //     $products = $products->orderBy('created_at', 'desc');
        // endif;

        $services = $services->paginate(10);

        return view('pages.front.services.all-services',compact('services'));
    }

    public function single_service($slug){
        $service  = Service::with('image_info')->where('slug',$slug)->first();
        return view('pages.front.services.show-service',compact('service'));
    }

    public function application_submit(Request $request,$id){
        $request->merge([
           'customer_id' => auth()->user() ? auth()->user()->id : null,
           'service_id'  => $id
        ]);

        $application_service = ApplicationOrder::create($request->only([
            'customer_id',
            'service_id',
            'name',
            'phone',
            'subscriber_notic'
        ]));

        flash()->success('تم ملئ الطلب بنجاح');
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

    public function setting_account(){
        return view('pages.front.my-account.account-settings');
    }
}
