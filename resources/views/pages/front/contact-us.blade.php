@extends('layouts.master_front')


@section('meta_tags')
<meta name="description" content="{{ isset($page->meta_description) ? $page->meta_description : get_settings('meta_description') }} ">
<meta name="title" content="{{ isset($page->meta_title) ? $page->meta_title : get_settings('meta_title') }} ">
@endsection


@section('content')
<section class="about-area about-bg" style="margin-top:50px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="choose-content-two">
                    <div class="section-title-two white-title">
                        <span class="sub-title" data-aos="fade-down" data-aos-delay="0" >
                            {{ isset($page->title) ? $page->title : '' }}
                        </span>
                        <h2 class="title" data-aos="fade-up" data-aos-delay="10" style="color: #1e3668;">
                            {{ isset($page->title) ? $page->title : '' }}
                        </h2>
                    </div>
                    <br/>
                    <div data-aos="fade-in" data-aos-delay="20">
                        {!! isset($page->content) ? $page->content : '' !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-delay="40">
                <div class="about-img-wrap-four">
                    <div class="mask-img-wrap">
                        <img src="{{ isset($page->thumbnail_id) ? upload_assets($page->thumbnail_id,true) : asset('front/assets/img/images/h3_about_img01.jpg') }}" alt="">
                    </div>
                    <div class="icon"><i class="flaticon-business-presentation"></i></div>
                    {{-- <img src="{{ asset('front/assets/img/images/h3_about_img02.jpg') }}" alt="" class="img-two"> --}}
                    <div class="about-shape-wrap-three">
                        <img src="assets/img/images/h3_about_shape01.png" alt="">
                        <img src="assets/img/images/h3_about_shape02.png" alt="">
                        <img src="assets/img/images/h3_about_shape03.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
</div>
@endsection