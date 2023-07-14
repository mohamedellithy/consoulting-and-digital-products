@extends('layouts.master')

@section('content')
    <h4 class="fw-bold py-3 mb-2">
        <span class="text-muted fw-light">Forms /</span> Basic Inputs
    </h4>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-4">
                    <h5 class="card-header">Default</h5>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">
                                        اسم الخدمة
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" id="formtabs-first-name" class="form-control"
                                            placeholder=""value="{{ old('name') }}" />
                                        @error('name')
                                            <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> وصف الخدمة
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="editor" rows="7" name='description'>{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">الصورة</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" id="formtabs-birthdate"
                                            class="form-control dob-picker" />
                                        @error('image')
                                            <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">
                                        تفعيل الواتساب</label>
                                    <div class="col-sm-9">
                                        <select name="whatsapStatus" id="formtabs-country" class="select2 form-select"
                                            data-allow-clear="true">

                                            <option value="1">مفعل</option>
                                            <option value="0">معطل</option>
                                        </select>
                                        @error('whatsapStatus')
                                            <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">
                                        رقم الواتساب
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="whatsapNumber" value="{{ old('whatsapNumber') }}" id="formtabs-first-name" class="form-control" placeholder="" />
                                        @error('whatsapNumber')
                                            <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">
                                        حالة تسجيل الدخول</label>
                                    <div class="col-sm-9">
                                        <select name="loginStatus" id="formtabs-country" class="select2 form-select"
                                            data-allow-clear="true">
                                            <option value="1">مفعل</option>
                                            <option value="0">معطل</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">انشاء الخدمة</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
