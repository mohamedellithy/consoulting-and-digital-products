<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function create()
    {
        return view('pages.admin.services._form');

    }
    public function store(ServiceRequest $request)
    {
        Service::create($request->all());

        return redirect()->route('list_services')->with('success_message', 'تم انشاء الخدمةابقة');

    }
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('pages.admin.services.list')
            ->with('services', $services);

    }
    public function edit($service_id)
    {
        $service = Service::find($service_id);
        return view('pages.admin.services._form')
            ->with('service', $service);

    }
      public function show($service_id)
    {
        $service = Service::find($service_id);
        return view('pages.admin.services.show')
            ->with('service', $service);

    }
    public function delete($service_id)
    {
        // dd($service_id);
        $service = Service::where('id', $service_id)->first();

// ;
        // dd($service);

        $service->delete();

       return redirect()->route('list_services');

    }
}
