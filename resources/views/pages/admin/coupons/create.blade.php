@php
use Illuminate\Support\Str;
$code = Str::random(10);
@endphp
@extends('layouts.master')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3" style="padding-bottom: 0rem !important;">اضافة كوبون جديد</h4>
        <!-- Basic Layout -->
        <form action="{{ route('admin.coupons.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl" style="padding: 0px 10px 10px;text-align: left;">
                    <button type="submit" class="btn btn-success btn-sm">اضافة الكوبون</button>
                </div>
                <br/>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">كود الكوبون</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder=""
                                    name="code" value="{{ old('code') ?: $code }}" required/>
                                @error('code')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">تاريخ بدأ الخصم</label>
                                <input type="date" id="basic-default-message" class="form-control" placeholder="" name='from' value="{{ old('from') }}" required>
                                @error('from')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">تاريخ نهاية الخصم</label>
                                <input type="date" id="basic-default-message" class="form-control" placeholder="" name='to' value="{{ old('to') }}" required>
                                @error('to')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">عدد مرات استخدام الكود</label>
                                <input type="number" id="basic-default-message" class="form-control" placeholder="" name='count_used' value="{{ old('to') }}" required>
                                @error('count_used')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">نوع الخصم</label>
                                <select name="discount_type" class="form-control">
                                    <option value="value">قيمة</option>
                                    <option value="percent">النسبة</option>
                                </select>
                                @error('discount_type')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">قيمة الخصم</label>
                                <input id="basic-default-message" class="form-control" placeholder="" name='value' value="{{ old('value') }}" required>
                                @error('value')
                                    <span class="text-danger w-100 fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <ul class="list-products">
                                <li>
                                    <input type="checkbox" name="products[]" />
                                    <span>منتج جديد</span>
                                </li>
                                <li>
                                    <input type="checkbox" name="products[]" />
                                    <span>منتج جديد</span>
                                </li>
                                <li>
                                    <input type="checkbox" name="products[]" />
                                    <span>منتج جديد</span>
                                </li>
                                <li>
                                    <input type="checkbox" name="products[]" />
                                    <span>منتج جديد</span>
                                </li>
                                <li>
                                    <input type="checkbox" name="products[]" />
                                    <span>منتج جديد</span>
                                </li>
                                <li>
                                    <input type="checkbox" name="products[]" />
                                    <span>منتج جديد</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- / Content -->
@endsection
@push('script')
<script>
    jQuery('document').ready(function(){
        jQuery('.download-type').on('change',function(){
           jQuery('.download-files').attr('data-type-media',jQuery(this).val());
        });
    });
</script>
@endpush
