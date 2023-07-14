@extends('layouts.master') @section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            الخدمات</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            {{-- <h5 class="card-header">Table Basic</h5> --}}
            <div class="table-responsive text-nowrap">
                <table class="table" id="table_id">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الرقم</th>
                            <th>الاسم</th>
                            <th>الوصف</th>
                            <th>الصورة</th>
                            <th>حالة الواتساب</th>
                            <th>رقم الواتساب</th>
                            <th>حالة التسجيل</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">

                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Christina Parker">
                                            {{-- {{ dd($service->image) }} --}}
                                            <img src="{{ $service->image }}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>

                                <td>
                                    @if ($service->whatsapStatus == 1)
                                        <span class="badge bg-label-success me-1">مفعل</span>
                                    @else
                                        <span class="badge bg-label-danger me-1">معطل</span>
                                    @endif

                                </td>
                                <td>{{ $service->whatsapNumber }}</td>

                                <td>
                                    @if ($service->loginStatus == 1)
                                        <span class="badge bg-label-success me-1">مفعل</span>
                                    @else
                                        <span class="badge bg-label-danger me-1">معطل</span>
                                    @endif

                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <form action="{{ route('admin.services.destroy', $service->id) }}"
                                                method="POST">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.services.edit', $service->id) }}"><i
                                                        class="bx bx-edit-alt me-2"></i>
                                                    تعديل</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-trash me-2"></i>حذف
                                                </button>


                                                <a class="dropdown-item"
                                                    href="{{ route('admin.services.show', $service->id) }}"><i
                                                        class="fa-regular fa-eye me-2"></i></i>عرض

                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection
