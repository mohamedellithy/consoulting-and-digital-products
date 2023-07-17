@extends('layouts.master')

@section('content')
 <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">تعديل خدمة</h4>

        <!-- Basic Layout -->
        <form class novalidate method="POST" action="{{ route('admin.services.update', $service->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">

                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">

                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">اسم الخدمة</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" placeholder=""
                                        name="name" value="{{ $service->name ?? old('name') }}" />
                                    @error('name')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company"> وصف الخدمة</label>
                                    <textarea id="basic-default-message" class="form-control" placeholder="" name='description'>{{ $service->description ?? old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname"> الصورة</label>
                                    <input type="file" name="image" id="formtabs-birthdate"
                                        class="form-control dob-picker" />
                                    @error('image')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">
                                        تفعيل الواتساب</label>

                                    <select name="whatsapStatus" id="formtabs-country" class="select2 form-select"
                                        data-allow-clear="true">

                                        <option value="1">مفعل</option>
                                        <option value="0">معطل</option>
                                    </select>
                                    @error('whatsapStatus')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message"> رقم الواتساب</label>
                                    <input type="text" name="whatsapNumber" value="{{ $service->whatsapNumber ?? old('whatsapNumber') }}"
                                        id="formtabs-first-name" class="form-control" placeholder="" />
                                    @error('whatsapNumber')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <button type="submit" class="btn btn-primary">Send</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card mb-4">
                        
                        <div class="card-body">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname"> الصورة</label>
                                        <br/>
                                        <button type="button" class="btn btn-danger upload-media" data-type-media="image">
                                            <i class='bx bx-upload' ></i>
                                            اضافة صورة للخدمة
                                            <input type="hidden" name="image" 
                                                class="form-control dob-picker uploaded-media-ids" required/>
                                        </button>
                                        @error('image')
                                            <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">حالة تسجيل الدخول</label>
                                <select name="loginStatus" id="formtabs-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="1">مفعل</option>
                                    <option value="0">معطل</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">meta title</label>
                                <input type="text" id="basic-icon-default-company" class="form-control" name="meta_title"
                                    value="{{ $service->meta_title ?? old('meta_title') }}" />
                                @error('meta_title')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">meta description</label>
                                <input type="text" id="basic-icon-default-company" class="form-control"
                                    name="meta_description"  value="{{ $service->meta_description ?? old('meta_description') }}"/>
                                @error('meta_description')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">تحديث خدمة</button>

                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <!-- / Content -->

@endsection
