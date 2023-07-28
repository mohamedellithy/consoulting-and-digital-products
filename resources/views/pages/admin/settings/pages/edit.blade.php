@extends('layouts.master')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3" style="padding-bottom: 0rem !important;"> {{ $page->title  }}</h4>
        <!-- Basic Layout -->
        <form action="{{ route('admin.settings.pages.update',$page->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-xl" style="padding: 0px 10px 10px;text-align: left;">
                    <button type="submit" class="btn btn-success btn-sm">تعديل الصفحة</button>
                </div>
                <br/>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">اسم الصفحة</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="title" value="{{ $page->title }}" required/>
                                @error('title')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company"> رابط الصفحة</label>
                                <input id="basic-default-message" class="form-control" placeholder="" name='slug' value="{{ $page->slug }}"  @if(!IsPagesAllowDeletes($page->slug)) disabled readonly @endif required>
                                @error('slug')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company"> محتوي الصفحة</label>
                                <textarea id="basic-default-message" class="form-control"  rows="10" placeholder="" name='content'>{{ $page->content }}</textarea>
                                @error('content')
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
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" value="active" @if($page->status == 'active') checked @endif>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">allow to show page</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label class="form-label" for="basic-default-fullname">موضع الصفحة </label>
                                <select type="text" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="position" value="{{ old('position') }}" required>
                                    <option value="header" @if($page->position == 'header') selected @endif>القائمة العلوية</option>
                                    <option value="footer" @if($page->position == 'footer') selected @endif>القائمة السفلية</option>
                                    <option value="both"   @if($page->position == 'both')   selected @endif>كلا القائمتين   </option>
                                </select>
                                @error('position')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="container-uploader">
                                    <button type="button" class="btn btn-warning btn-sm upload-media" data-type-media="image">
                                        <i class='bx bx-upload' ></i>
                                        اضافة صورة للصفحة
                                        <input type="hidden" name="thumbnail_id" value="{{ $page->thumbnail_id }}"
                                            class="form-control dob-picker uploaded-media-ids" required/>
                                    </button>
                                    @error('thumbnail_id')
                                        <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                    @enderror
                                    <div class="preview-thumbs">
                                        <br/>
                                        <ul class="list-preview-thumbs">
                                            @if($page->thumbnail_id)
                                                <li class="preview-media-inner">
                                                    <img src="{{ upload_assets($page->image_info) }}" />
                                                    <i class='bx bxs-message-square-x remove' media-id="{{ $page->thumbnail_id }}"></i>
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
                                <label class="form-label" for="basic-icon-default-company">عنوان السيو ( meta title )</label>
                                <input type="text" id="basic-icon-default-company" class="form-control" name="meta_title"
                                    value="{{ $page->meta_title ?: old('meta_title') }}" />
                                @error('meta_title')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">وصف السيو ( meta description ) </label>
                                <textarea type="text" id="basic-icon-default-company" class="form-control"
                                    name="meta_description">{{ $page->meta_description ?: old('meta_description') }}</textarea>
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
