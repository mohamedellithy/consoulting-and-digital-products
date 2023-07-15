<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Services\UploadImage;
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
        $upload = new UploadImage();
        $image = $upload->delete_image($service);
        $service = Service::destroy($id);

        return redirect()->route('admin.services.index');

    }
    public function search(Request $request)
    {
        $output = "";

        $services = Service::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'desc')->paginate(10);
        if ($services != null) {
            foreach ($services as $service) {
                $output .= '
        <tr>
         <td>' . $service->name . '</td>
         <td class="d-inline-block text-truncate" style="max-width: 150px;">' . $service->description . '</td>
         <td> <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Christina Parker"><img src="' . upload_assets($service->image_info) . '"alt="Avatar"
                                                class="rounded-circle">
                                        </li>
                                    </ul></td>
                                    <td>' . ($service->whatsapStatus == 1 ? '<span class="badge bg-label-success me-1">مفعل</span>' : '<span class="badge bg-label-danger me-1">معطل</span>') . '</td>
                                       <td>' . $service->whatsapNumber . '</td>
                                       <td>' . ($service->loginStatus == 1 ? '<span class="badge bg-label-success me-1">مفعل</span>' : '<span class="badge bg-label-danger me-1">معطل</span>') . '</td>
                                       <td>
 <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            ' . '<form action="' . route("admin.services.destroy", $service->id) . ' "' . '
                                                method="POST">
                                                <a class="dropdown-item"
                                                    href="' . route("admin.services.edit", $service->id) . '"><i
                                                        class="bx bx-edit-alt me-2"></i>
                                                    تعديل</a>
                                                @csrf
                                               @method("DELETE")
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-trash me-2"></i>حذف
                                                </button>


                                                <a class="dropdown-item"
                                                    href="' . route("admin.services.show", $service->id) . '"><i
                                                        class="fa-regular fa-eye me-2"></i></i>عرض

                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                       </td>


        </tr>
        ';
            }
        } else {
            $output .= '<tr>
         <td>لا يوجد بيانات</td></tr>
        ';
        }

        return response($output);

    }

}
