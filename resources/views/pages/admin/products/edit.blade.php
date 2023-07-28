@extends('layouts.master')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3" style="padding-bottom: 0rem !important;">اضافة منتج جديد</h4>
        <!-- Basic Layout -->
        <form action="{{ route('admin.products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-xl" style="padding: 0px 10px 10px;text-align: left;">
                    <button type="submit" class="btn btn-success btn-sm">تعديل المنتج</button>
                </div>
                <br/>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">اسم المنتج</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="name" value="{{ $product->name }}" required/>
                                @error('name')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company "> نبذة عن المنتج </label>
                                <textarea id="basic-default-message" class="form-control"  rows="3" placeholder="" name='short_description' required>{{ $product->short_description }}</textarea>
                                @error('short_description')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company"> وصف المنتج</label>
                                <textarea id="basic-default-message" class="form-control summernote"  rows="10" placeholder="" name='description' required>{{ $product->description }}</textarea>
                                @error('description')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">سعر المنتج</label>
                                <input id="basic-default-message" class="form-control" placeholder="" name='price' value="{{ $product->price }}" required>
                                @error('slug')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company"> رابط المنتج</label>
                                <input id="basic-default-message" class="form-control" placeholder="" name='slug' value="{{ $product->slug }}" required>
                                @error('slug')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="mb-3">
                                <h4 class="">التحميلات </h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">نوع الملف</label>
                                <select type="url" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="download_type" value="{{ old('download_type') }}" required>
                                    <option value="pdf"   @if($product->downloads->download_type == 'pdf') selected @endif>Pdf</option>
                                    <option value="image" @if($product->downloads->download_type == 'image') selected @endif>Image</option>
                                    <option value="video" @if($product->downloads->download_type == 'video') selected @endif>Video</option>
                                    <option value="audio" @if($product->downloads->download_type == 'audio') selected @endif>Audio</option>
                                    <option value="zip"   @if($product->downloads->download_type == 'zip') selected @endif>Zip</option>
                                </select>
                                @error('download_type')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="container-uploader">
                                    <button type="button" class="btn btn-info btn-sm upload-media" data-type-media="image" data-multiple-media="true">
                                        <i class='bx bx-upload' ></i>
                                        اضافة ملفات قابلة للتحميل
                                        <input type="hidden" name="download_attachments_id" value="{{ $product->downloads->download_attachments_id  }}"
                                            class="form-control dob-picker uploaded-media-ids"/>
                                    </button>
                                    @error('download_attachments_id')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror
                                    <div class="preview-thumbs">
                                        <br/>
                                        <div class="alert alert-info ">
                                            لايوجد ملفات
                                        </div>
                                        <ul class="list-preview-thumbs">
                                            @if($product->downloads->download_attachments_id)
                                                @foreach(GetAttachments($product->downloads->download_attachments_id) as $attachment)
                                                    <li class="preview-media-inner">
                                                        <img src="{{ upload_assets($attachment) }}" />
                                                        <i class='bx bxs-message-square-x remove' media-id="{{ $attachment->id }}"></i>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">حالة الملف</label>
                                <select type="url" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="download_status" value="{{ old('download_status') }}" required>
                                    <option value="download"         @if($product->downloads->download_status == 'download') selected @endif>تنزيل الملف او الفيديو</option>
                                    <option value="without_download" @if($product->downloads->download_status == 'without_download') selected @endif>مشاهدة بدون تنزيل</option>
                                </select>
                                @error('download_status')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">رابط ملف التحميل ان وجدت</label>
                                <input type="url" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="download_link" value="{{ $product->downloads->download_link ?: old('download_link') }}"/>
                                @error('download_link')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">اسم الملف التحميلات</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="download_name" value="{{ $product->downloads->download_name ?: old('download_name') }}" required/>
                                @error('download_name')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">وصف ملف التحميلات</label>
                                <textarea type="text" class="form-control summernote" id="basic-default-fullname" placeholder=""
                                    name="download_description" required>{{ $product->downloads->download_description ?: old('download_description') }}</textarea>
                                @error('download_description')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="container-uploader">
                                    <button type="button" class="btn btn-outline-warning btn-sm upload-media" data-type-media="image">
                                        <i class='bx bx-upload' ></i>
                                        اضافة صورة للمنتج
                                        <input type="hidden" name="thumbnail_id" value="{{ $product->thumbnail_id }}"
                                            class="form-control dob-picker uploaded-media-ids" required/>
                                    </button>
                                    @error('thumbnail_id')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror
                                    <div class="preview-thumbs">
                                        <br/>
                                        <div class="alert alert-info ">
                                            لايوجد صورة للمنتج
                                        </div>
                                        <ul class="list-preview-thumbs">
                                            @if($product->thumbnail_id)
                                                <li class="preview-media-inner">
                                                    <img src="{{ upload_assets($product->image_info) }}" />
                                                    <i class='bx bxs-message-square-x remove' media-id="{{ $product->thumbnail_id }}"></i>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="container-uploader">
                                    <button type="button" class="btn btn-outline-warning btn-sm upload-media" data-type-media="image" data-multiple-media="true">
                                        <i class='bx bx-upload' ></i>
                                        اضافة صور أخري  للمنتج
                                        <input type="hidden" name="attachments_id" value="{{ $product->attachments_id }}"
                                            class="form-control dob-picker uploaded-media-ids" required/>
                                    </button>
                                    @error('attachments_id')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror
                                    <div class="preview-thumbs">
                                        <br/>
                                        <div class="alert alert-info ">
                                            لايوجد صورة للمنتج
                                        </div>
                                        <ul class="list-preview-thumbs">
                                            @if($product->attachments_id)
                                                @foreach(GetAttachments($product->attachments_id) as $attachment)
                                                    <li class="preview-media-inner">
                                                        <img src="{{ upload_assets($attachment) }}" />
                                                        <i class='bx bxs-message-square-x remove' media-id="{{ $attachment->id }}"></i>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">عنوان السيو ( meta title )</label>
                                <input type="text" id="basic-icon-default-company" class="form-control" name="meta_title"
                                    value="{{ old('meta_title') }}" />
                                @error('meta_title')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">وصف السيو ( meta description ) </label>
                                <textarea type="text" id="basic-icon-default-company" class="form-control"
                                    name="meta_description">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- / Content -->
@endsection
