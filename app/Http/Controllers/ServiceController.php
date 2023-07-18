<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        return view('pages.admin.services.create');
    }
    public function store(ServiceRequest $request)
    {
        Service::create($request->all());
        return redirect()->route('admin.services.index')->with('success_message', 'تم انشاء الخدمة');
    }
    public function index()
    {

        $services = Service::with('image_info')->orderBy('id', 'desc')->paginate(10);
        return view('pages.admin.services.index', compact('services'));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('pages.admin.services.edit', compact('service'));
    }
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->image = $request->image;
        $service->whatsapStatus = $request->input('whatsapStatus');
        $service->whatsapNumber = $request->input('whatsapNumber');
        $service->loginStatus = $request->input('loginStatus');
        $service->save();
        return redirect()->route('admin.services.index');
        // return redirect()->back();

    }
    public function show($id)
    {
        $service = Service::find($id);
        return view('pages.admin.services.show', compact('service'));
    }
    public function destroy($id)
    {
        $service = Service::find($id)->value('image');
        $service = Service::destroy($id);

        return redirect()->route('admin.services.index');

    }
    public function search(Request $request)
    {
        $loginStatus = $request->loginStatus;
        $whatsapStatus = $request->whatsapStatus;

        $services = Service::where('name', 'like', '%' . $request->search . '%')->when(!is_null($loginStatus), function ($query) use ($loginStatus) {
            return $query->where('loginStatus', $loginStatus);
        })->when(!is_null($whatsapStatus), function ($query) use ($whatsapStatus) {
            return $query->where('whatsapStatus', $whatsapStatus);
        })
            ->orderBy('id', 'desc')->paginate(10);
        return response()->json([
            'status' => 'success',
            '_result' => view('partials.services_list', compact('services'))->render(),
        ]);
    }

    // public function filter(Request $request)
    // {
    //     $loginStatus = $request->loginStatus;
    //     $whatsapStatus = $request->whatsapStatus;

    //     $services = Service::when(!is_null($loginStatus), function ($query) use ($loginStatus) {
    //         return $query->where('loginStatus', $loginStatus);
    //     })->when(!is_null($whatsapStatus), function ($query) use ($whatsapStatus) {
    //         return $query->where('whatsapStatus', $whatsapStatus);
    //     })->paginate(10);

    //     return view('pages.admin.services.index', compact('services'));

    // }
}
