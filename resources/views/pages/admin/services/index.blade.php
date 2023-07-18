@extends('layouts.master') @section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            الخدمات</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            {{-- <h5 class="card-header">Table Basic</h5> --}}
            <div class="d-flex flex-row align-content-center justify-content-between">
                <div class="nav-item d-flex align-items-center m-4" style="max-width: 30%">
                    <i class="bx bx-search position-absolute top-3 right-10 p-0"></i>
                    <input type="text" class="search form-control border shadow-sm " placeholder="ابحث"
                        aria-label="Search..." id="search" name="search" />
                </div>
<div class="d-flex flex-row mx-5">
    <div class="form-group m-2">
                    <label for="whatsapStatus">حالة الواتساب</label>
                    <select class=" form-control select" name="whatsapStatus" id="whatsapStatus">
                        <option {{ is_null(request()->input('whatsapStatus')) ? 'selected' : '' }} value=""> الكل
                        </option>
                        <option {{ request()->input('whatsapStatus') == 1 ? 'selected' : '' }} value="1">مفعل
                        </option>
                        <option
                            {{ !is_null(request()->input('whatsapStatus')) && request()->input('whatsapStatus') == 0 ? 'selected' : '' }}
                            value="0">معطل </option>
                    </select>
                </div>

                <div class="form-group m-2">
                    <label for="loginStatus">حالة التسجيل</label>
                    <select class="form-control select" name="loginStatus" id="loginStatus">
                        <option {{ is_null(request()->input('loginStatus')) ? 'selected' : '' }} value=""> الكل
                        </option>
                        <option {{ request()->input('loginStatus') == 1 ? 'selected' : '' }} value="1">مفعل</option>
                        <option
                            {{ !is_null(request()->input('loginStatus')) && request()->input('loginStatus') == 0 ? 'selected' : '' }}
                            value="0">معطل</option>
                    </select>
                </div>
</div>



            </div>




            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الوصف</th>
                            <th>الصورة</th>
                            <th>حالة الواتساب</th>
                            <th>رقم الواتساب</th>
                            <th>حالة التسجيل</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 alldata">
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->name }}</td>
                                <td class="text-truncate" style="max-width: 150px;">
                                    {{ $service->description }}
                                </td>
                                <td>
                                    <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">

                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="" title="Christina Parker">
                                            {{-- {{ dd($service->image) }} --}}
                                            <img src="{{ upload_assets($service->image_info) }}" alt="Avatar"
                                                height="100" width="100" class="d-block rounded">
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
                    <tbody id="content" class="searchdata"></tbody>
                    </tbody>

                </table>

                <div class="d-flex flex-row justify-content-center">

                    {{ $services->links() }}
                </div>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection
@push('script')
    <script>
        //  $('#search').on('keyup', function() {
        //     $search = $('#search').val();
        //     console.log($search)
        //     if ($search) {
        //         $('.alldata').hide()
        //         $('.searchdata').show()

        //     } else {
        //         $('.alldata').show()
        //         $('.searchdata').hide()
        //     }
        //     $.ajax({
        //         url: '{{ route('search') }}',
        //         method: 'GET',
        //         data: {
        //             search: $search

        //         },
        //         success: function(data) {
        //             if (data._result.length > 0) {
        //                 console.log(data);
        //                 $('.searchdata').empty();
        //                 jQuery('.searchdata').append(data._result);

        //             } else {

        //                 $('.searchdata').empty();
        //                 jQuery('.alldata').hide();
        //                 // jQuery('.searchdata').append('لايوجد بيانات');

        //             }
        //             console.log('hi');
        //         }

        //     });
        // });
        $('#whatsapStatus, #search,#loginStatus').on('change', function() {
            $search = $('#search').val();
            $whatsapStatus = $('#whatsapStatus').val();
            $loginStatus = $('#loginStatus').val();
            console.log($search)
            console.log($whatsapStatus)
            console.log($loginStatus)

            if ($search || $whatsapStatus || $loginStatus) {
                $('.alldata').hide()
                $('.searchdata').show()

            } else {
                $('.alldata').show()
                $('.searchdata').hide()
            }
            $.ajax({
                url: '{{ route('search') }}',
                method: 'GET',
                data: {
                    search: $search,
                    whatsapStatus: $whatsapStatus,
                    loginStatus: $loginStatus
                },
                success: function(data) {
                    if (data._result.length > 0) {
                        console.log(data);
                        $('.searchdata').empty();
                        jQuery('.searchdata').append(data._result);

                    } else {

                        $('.searchdata').empty();
                        jQuery('.alldata').hide();
                        jQuery('.searchdata').append('لايوجد بيانات');

                    }
                    console.log('hi');
                }

            });
        });
    </script>
@endpush
