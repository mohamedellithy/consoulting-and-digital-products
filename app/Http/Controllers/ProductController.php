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
        Product::create($request->only([
            'name',
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
        $product = Product::find($id);
        return view('pages.admin.products.edit', compact('product'));
    }
    public function update(ProductRequest $request, $id)
    {
        $product = Product::where('id',$id)->update($request->only([
            'name',
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
        $service = Product::find($id)->value('image');
        $service = Product::destroy($id);

        return redirect()->route('admin.products.index');

    }
    public function search(Request $request){
        // here search
    }
}
