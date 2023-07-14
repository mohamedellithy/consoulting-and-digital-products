@extends('layouts.master')

@section('content')
<h4 class="fw-bold py-3 mb-2">
    <span class="text-muted fw-light">Forms /</span> Basic Inputs
</h4>

<div class="row">
    <div class="col-md-12">
        <form class novalidate method="POST" action="{{ route('admin.services.update', $serivce->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card mb-4">
                {{-- <h5 class="card-header">Default</h5> --}}
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">
                                    اسم الخدمة
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="formtabs-first-name" name="name" type="text" placeholder value="{{ $serivce->name ?? old('name') }}">
                                    @error('name')
                                        <span class="text-danger w-100 fs-6">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name"> وصف
                                    الخدمة
                                </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="editor" name="description" rows="7">
                                        {{ $serivce->description }}</textarea>
                                        @error('description')
                                            <span class="text-danger w-100 fs-6">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">الصورة</label>
                                <div class="col-sm-9">
                                    <input class="form-control dob-picker" id="formtabs-birthdate" name="image" type="file"> @error('image')
                                    <span class="text-danger w-100 fs-6">
                                        {{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">
                                    تفعيل الواتساب</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-select" id="formtabs-country" name="whatsapStatus" data-allow-clear="true">
                                        <option value="1">مفعل</option>
                                        <option value="0">معطل</option>
                                    </select>
                                    @error('whatsapStatus')
                                        <span class="text-danger w-100 fs-6">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">
                                    رقم الواتساب</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="formtabs-first-name" name="whatsapNumber" type="text" placeholder value="{{ $serivce->whatsapNumber ?? old('whatsapNumber') }}">
                                    @error('whatsapNumber')
                                        <span class="text-danger w-100 fs-6">
                                            {{$message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">
                                    حالة تسجيل الدخول</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-select" id="formtabs-country" name="loginStatus" data-allow-clear="true">
                                        <option value="1">مفعل</option>
                                        <option value="0">معطل</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button  class="form-control btn btn-info" id="formtabs-first-name" type="submit">
                      تحديث الخدمة
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
