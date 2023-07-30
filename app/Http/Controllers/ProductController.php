<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
class ProductController extends Controller
{
    public function create()
    {
        return view('pages.admin.products.create');
    }
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->only([
            'name',
            'description',
            'short_description',
            'thumbnail_id',
            'status',
            'slug',
            'attachments_id',
            'price',
            'discount',
            'meta_title',
            'meta_description'
        ]));

        $product->downloads()->create($request->only([
            'product_id',
            'download_name',
            'download_description',
            'download_link',
            'download_attachments_id',
            'download_status',
            'download_type'
        ]));

        flash()->success('تم اضافة منتج جديد بنجاح ');
        return redirect()->route('admin.products.index')->with('success_message', 'تم انشاء الخدمة');
    }
    public function index(Request $request)
    {
        $products =  Product::query();
        $products = $products->with('image_info');
        $per_page = 10;
        if($request->has('search')):
            $products = $products->where('name', 'like', '%' . $request->query('search') . '%')->orWhere('name', 'like', '%' . $request->query('search') . '%');
        endif;

        if($request->has('status')):
            $products = $products->where('status',$request->query('status'));
        endif;

        if($request->has('filter')):
            if($request->query('filter') == 'high-price'):
                $products = $products->orderBy('price','desc');
            elseif($request->query('filter') == 'low-price'):
                $products = $products->orderBy('price','asc');
            endif;
        else:
            $products = $products->orderBy('id', 'desc');
        endif;

        if($request->has('rows')):
            $per_page = $request->query('rows');
        endif;

        $products = $products->paginate($per_page);
        return view('pages.admin.products.index', compact('products'));
    }
    public function edit($id)
    {
        $product = Product::with('downloads')->find($id);
        return view('pages.admin.products.edit', compact('product'));
    }
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->only([
            'name',
            'short_description',
            'description',
            'thumbnail_id',
            'status',
            'slug',
            'attachments_id',
            'price',
            'discount',
            'meta_title',
            'meta_description'
        ]));

        $product->downloads()->updateOrCreate($request->only([
            'product_id',
        ]),$request->only([
            'download_name',
            'download_description',
            'download_link',
            'download_attachments_id',
            'download_status',
            'download_type'
        ]));

        flash()->success('تم تعديل المنتج بنجاح');

        return redirect()->route('admin.products.index');
        // return redirect()->back();

    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('pages.admin.products.show', compact('product'));
    }
    public function destroy($id)
    {
        $product = Product::destroy($id);

        flash()->success('تم حذف المنتج بنجاح');
        return redirect()->route('admin.products.index');

    }
}
