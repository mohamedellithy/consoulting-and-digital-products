@extends('layouts.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"> تفاصيل ( {{ $customer->name }} )</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.customers.show',$customer->id) }}"><i class="bx bx-user me-1"></i> تفاصيل الزبون</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.customers.services-orders',$customer->id) }}"><i class="bx bx-bell me-1"></i>
                         طلبات الخدمات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.customers.products-orders',$customer->id) }}"><i
                                class="bx bx-link-alt me-1"></i>
                                طلبات المنتجات الرقمية
                        </a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <h5 class="card-header">تفاصيل الزبون</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4 heading">
                                    <img src="{{ upload_assets(null,"assets/img/avatars/user_avatar.png") }}" alt="service-avatar"
                                        class="d-block rounded" style="margin: auto;" height="100" width="100" id="uploadedAvatar" />

                                </div>
                                <br/>
                                <div class="row customer-details">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الاسم</label>
                                            <p>{{ $customer->name }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>رقم الجوال</label>
                                            <p>{{ $customer->phone ?: '-' }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>حالة الزبون</label>
                                            <p>{{ $customer->status ?: '-' }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>البريد الالكترونى</label>
                                            <p>{{ $customer->email }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>حالة البريد الالكترونى</label>
                                            <p>{{ isset($customer->email_verified_at) ? 'مؤكد' : '-' }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ التسجيل</label>
                                            <p>{{ $customer->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <!-- /Account -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <h5 class="card-header">تفاصيل طلبات العميل</h5>
                            <div class="row customer-details">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>اجمالى الطلبات</label>
                                        <p>123948</p>
                                    </div>
                                    <div class="form-group">
                                        <label>طلبات الخدمات</label>
                                        <p>123948</p>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>طلبات المنتجات الرقمية</label>
                                        <p>1239428</p>
                                    </div>
                                    <div class="form-group">
                                        <label>اجمالى المدفوعات</label>
                                        <p>1239428 USD</p>
                                    </div>
                                </div>

                            </div>
                            <hr class="my-0" />
                            <!-- /Account -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
