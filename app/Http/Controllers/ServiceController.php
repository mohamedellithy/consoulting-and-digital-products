<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function create(){
        return view('pages.admin.services.create');
    }
    public function store(ServiceRequest $request){
        Service::create($request->all());
        return redirect()->route('admin.services.index')->with('success_message', 'تم انشاء الخدمةابقة');
    }
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(10);
        return view('pages.admin.services.index',compact('services'));

    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('pages.admin.services.edit',compact('service'));
    }
    public function show($id){
        $service = Service::find($id);
        return view('pages.admin.services.show',compact('service'));
    }
    public function delete($id)
    {
        $service = Service::destroy($id);
        return redirect()->route('list_services');
    }
}
