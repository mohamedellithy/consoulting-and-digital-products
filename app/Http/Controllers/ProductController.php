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
        Product::create($request->all());
        return redirect()->route('admin.products.index')->with('success_message', 'تم انشاء الخدمة');
    }
    public function index()
    {

        $services = Product::with('image_info')->orderBy('id', 'desc')->paginate(10);
        return view('pages.admin.products.index', compact('services'));
    }
    public function edit($id)
    {
        $service = Product::find($id);
        return view('pages.admin.products.edit', compact('service'));
    }
    public function update(ProductRequest $request, $id)
    {
        $service = Product::findOrFail($id);
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->image = $request->image;
        $service->whatsapStatus = $request->input('whatsapStatus');
        $service->whatsapNumber = $request->input('whatsapNumber');
        $service->loginStatus = $request->input('loginStatus');
        $service->save();
        return redirect()->route('admin.products.index');
        // return redirect()->back();

    }
    public function show($id)
    {
        $service = Product::find($id);
        return view('pages.admin.services.show', compact('service'));
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
