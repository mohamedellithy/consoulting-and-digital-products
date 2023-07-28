@extends('layouts.master_front')


@section('content')
 <!-- project-details-area -->
 <section class="project-details-area pt-120 pb-120 page-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-details-wrap">
                    <div class="row">
                        <div class="col-71">
                            <div class="project-details-thumb service-details-thumb">
                                <img src="{{ upload_assets($service->image_info) }}" alt="">
                            </div>
                        </div>
                        <div class="col-29">
                            <div class="project-details-info">
                                <h6 class="title">تفاصيل الخدمة </h6>
                                <ul class="list-wrap">
                                    <li class="first-list">
                                        <strong> {{ $service->name }} </strong>
                                    </li>
                                    <li>
                                        <label>المشتركين فى الخدمة : </label>
                                        <strong> 1293848 </strong>
                                    </li>
                                    <li>
                                        <button id="subscrib_on_service" class="btn btn-secondary-color btn-sm">
                                            الاشتراك فى الخدمة
                                        </button>
                                    </li>
                                    <li>
                                        <a href="{{ 'https://wa.me/'.get_settings('website_whastapp').'?text='.urlencode(' طلب استفسار بخصوص خدمة ' . $service->name) }}" id="subscrib_on_service" class="btn btn-warning btn-sm">
                                            التواصل من خلال الواتس
                                        </a>
                                    </li>
                                    <li class="social">
                                        <label>Share:</label>
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="project-details-content">
                        <h5 class="title">{{ $service->name }}</h5>
                        <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                            <span class="sub-title">تفاصيل الخدمة</span>
                        </div>
                        <p>
                            {!! $service->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-details-area-end -->


<!-- header-search -->
<div class="services-application-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="services-application-close">
        <span><i class="fas fa-times"></i></span>
    </div>
    <div class="search-wrap text-center">
        <div class="container">
            <div class="row">
                <div class="col-6 application-inner">
                    <form action="{{ route('application-submit',$service->id) }}" method="post">
                        @csrf
                        <div class="heading">
                            <h4 class="title text-center">فورم التسجيل فى الخدمة </h4>
                            <h6 class="sub-title text-center"> {{ $service->name }}</h6>
                        </div>
                        <div class="form-group">
                            <label>اسم المشترك</label>
                            <input name="name" type="text" class="form-control" required/>
                            @error('name')
                                <span class="text-danger w-100 fs-6">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>رقم الجوال</label>
                            <input name="phone" type="text" class="form-control" required/>
                            @error('phone')
                                <span class="text-danger w-100 fs-6">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>وصف المطلوب</label>
                            <textarea name="subscriber_notic" rows="3" name="" class="form-control" required></textarea>
                            @error('subscriber_notic')
                                <span class="text-danger w-100 fs-6">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group text-center" style="padding: 27px;">
                            <button type="submit" class="btn btn-warning ">الاشتراك فى الخدمة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-search-end -->
@endsection

@push('scripts')

@endpush