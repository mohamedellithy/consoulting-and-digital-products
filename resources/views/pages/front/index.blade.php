@extends('layouts.master_front')

@section('meta_tags')
<meta name="description" content="{{ get_settings('meta_description') }} ">
@endsection


@section('content')

<!-- banner-area -->
<section class="banner-area-two banner-bg-two" data-background="assets/img/banner/h2_banner_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content-two">
                    <span class="sub-title" data-aos="fade-up" data-aos-delay="0">
                        نحن خبراء في هذا المجال
                    </span>
                    <h2 class="title " data-aos="fade-up" data-aos-delay="300">
                        الخطوة الرائدة للتجارة و الاستثمار
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="500">
                        تمتلك وكالة الخطوة الرائدة للتجارة و الاستثمار امكانيات فريدة و متميزة لتحقيق النتائج السريعة و تحقيق أعلى مكاسب
                    </p>
                    <div class="banner-btn">
                        <a href="services.html" class="btn" data-aos="fade-left" data-aos-delay="700">خدماتنا</a>
                        <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="play-btn popup-video" data-aos="fade-right" data-aos-delay="700"><i class="fas fa-play"></i> <span>مشاهدة الفيديو التعريفي</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img text-center">
                    <img src="{{ asset('front/assets/img/banner/arabic-businessman-traditional-small.png') }}" alt="" data-aos="fade-right" data-aos-delay="400">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape-wrap">
        <img src="{{ asset('front/assets/img/banner/h2_banner_shape01.png') }}" alt="">
        <img src="{{ asset('front/assets/img/banner/h2_banner_shape02.png') }}" alt="">
        <img src="{{ asset('front/assets/img/banner/h2_banner_shape03.png') }}" alt="" data-aos="zoom-in-up" data-aos-delay="800">
    </div>
</section>
<!-- banner-area-end -->

<!-- brand-area -->
<section class="brand-aera-two">
    <div class="container">
        <br/>
        <div class="brand-item-wrap">
            <h6 class="title">موثوق به من قبل أكثر من 10000 شركة حول العالم</h6>
            <div class="row brand-active">
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('front/assets/img/brand/brand_img01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('front/assets/img/brand/brand_img02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('front/assets/img/brand/brand_img03.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('front/assets/img/brand/brand_img04.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('front/assets/img/brand/brand_img05.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('front/assets/img/brand/brand_img03.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand-area-end -->

<!-- about-area -->
<section class="about-area-three">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="about-img-wrap-three">
                    <img src="{{ asset('front/assets/img/images/h2_about_img01.jpg') }}" alt="" data-aos="fade-down-right" data-aos-delay="0">
                    <img src="{{ asset('front/assets/img/images/h2_about_img02.jpg') }}" alt="" data-aos="fade-left" data-aos-delay="400">
                    <div class="experience-wrap" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">25 <span>عام</span></h2>
                        <p> من الخبرة في قطاع التجارة و الاستثمار فى الشرق الاوسط.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-three">
                    <div class="section-title-two mb-20">
                        <span class="sub-title">تعرف علينا</span>
                        <h2 class="title" data-aos="fade-up" data-aos-delay="300">الخطوة الرائدة للتجارة و الاستثمار فى الشرق الأوسط</h2>
                    </div>
                    <p class="info-one">
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم
                        ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.
                        <br/> <br/> لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل
                        المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.
                    </p>

                    <div class="about-author-info">
                        <div class="thumb">
                            <img src="{{ asset('front/assets/img/images/about_author.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Mark Stranger</h2>
                            <span>CEO, Gerow Finance</span>
                        </div>
                        <div class="signature">
                            <img src="{{ asset('front/assets/img/images/signature.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-shape-wrap-two">
        <img src="{{ asset('front/assets/img/images/h2_about_shape01.png') }}" alt="">
        <img src="{{ asset('front/assets/img/images/h2_about_shape02.png') }}" alt="">
        <img src="{{ asset('front/assets/img/images/h2_about_shape03.png') }}" alt="" data-aos="fade-left" data-aos-delay="500">
    </div>
</section>
<!-- about-area-end -->

<!-- services-area -->
<section class="services-area services-bg" data-background="{{ asset('front/assets/img/bg/services_bg.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title white-title text-center mb-50">
                    <span class="sub-title">خدماتنا المخصصة</span>
                    <h2 class="title">
                        تسليط الضوء على البعض الخدمات المهمة لدينا
                    </h2>
                    <p>
                        تقدم وكالة الخطوة الرائدة للتجارة و الاستثمار خدمات فريدة و متنوعة
                    </p>
                </div>
            </div>
        </div>
        <div class="row services-active">
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div>
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">عرض الخدمة</a>
                        </div>
                        <div class="list-wrap text-right">
                            <h6>تقدم وكالة الخطوة الرائدة للتجارة و الاستثمار خدمات</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div>
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">عرض الخدمة</a>
                        </div>
                        <div class="list-wrap text-right">
                            <h6>تقدم وكالة الخطوة الرائدة للتجارة و الاستثمار خدمات</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div>
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">عرض الخدمة</a>
                        </div>
                        <div class="list-wrap text-right">
                            <h6>تقدم وكالة الخطوة الرائدة للتجارة و الاستثمار خدمات</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div>
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">عرض الخدمة</a>
                        </div>
                        <div class="list-wrap text-right">
                            <h6>تقدم وكالة الخطوة الرائدة للتجارة و الاستثمار خدمات</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div>
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">عرض الخدمة</a>
                        </div>
                        <div class="list-wrap text-right">
                            <h6>تقدم وكالة الخطوة الرائدة للتجارة و الاستثمار خدمات</h6>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- services-area-end -->

<!-- about-area -->
<section class="about-area about-bg" data-background="{{ asset('front/assets/img/bg/about_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img-wrap">
                    <img src="{{ asset('front/assets/img/images/about_img01.png') }}" data-aos="fade-right" data-aos-delay="0" alt="" class="main-img">
                    <img src="{{ asset('front/assets/img/images/about_img_shape01.png') }}" alt="">
                    <img src="{{ asset('front/assets/img/images/about_img_shape02.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-content">
                    <div class="section-title mb-25">
                        <span class="sub-title">ماذا نحن نقدم</span>
                        <h2 class="title" data-aos="fade-in" data-aos-delay="0">تغيير طريقة العمل لأفضل حلول الأعمال</h2>
                    </div>
                    <p data-aos="fade-up" data-aos-delay="10">
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم
                        ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- project-area -->
<section class="project-area slider project-bg" data-background="{{ asset('front/assets/img/bg/project_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="section-title-two mb-50">
                    <span class="sub-title">منتجاتنا الرقمية</span>
                    <h4 class="title">توفر الخطوة الرائدة العديد من المنتجات الرقمية المتميزة </h4>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-4">
                <div class="view-all-btn text-end mb-30">
                    <a href="services.html" class="btn btn-secondary-color">عرض كل المنتجات</a>
                </div>
            </div>
        </div>
        <div class="row products-active slide">
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <!-- <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div> -->
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">
                                Purchase Now
                            </a>
                        </div>
                        <div class="list-wrap">
                            <h6 class="title">Tax Strategy</h6>
                            <div class="bottom-content d-flex">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span style="color:black">
                                        ( 12 )
                                    </span>
                                </div>
                                <b>
                                    1234.23 USD
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <!-- <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div> -->
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">
                                Purchase Now
                            </a>
                        </div>
                        <div class="list-wrap">
                            <h6 class="title">Tax Strategy</h6>
                            <div class="bottom-content d-flex">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span style="color:black">
                                        ( 12 )
                                    </span>
                                </div>
                                <b>
                                    1234.23 USD
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <!-- <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div> -->
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">
                                Purchase Now
                            </a>
                        </div>
                        <div class="list-wrap">
                            <h6 class="title">Tax Strategy</h6>
                            <div class="bottom-content d-flex">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span style="color:black">
                                        ( 12 )
                                    </span>
                                </div>
                                <b>
                                    1234.23 USD
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <!-- <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div> -->
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">
                                Purchase Now
                            </a>
                        </div>
                        <div class="list-wrap">
                            <h6 class="title">Tax Strategy</h6>
                            <div class="bottom-content d-flex">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span style="color:black">
                                        ( 12 )
                                    </span>
                                </div>
                                <b>
                                    1234.23 USD
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-item">
                    <div class="services-content">
                        <!-- <div class="content-top">
                            <div class="icon">
                                <i class="flaticon-briefcase"></i>
                            </div>
                            <h2 class="title">Business Analysis</h2>
                        </div> -->
                        <div class="services-thumb">
                            <img src="{{ asset('front/assets/img/services/services_img01.jpg') }}" alt="">
                            <a href="services-details.html" class="btn transparent-btn">
                                Purchase Now
                            </a>
                        </div>
                        <div class="list-wrap">
                            <h6 class="title">Tax Strategy</h6>
                            <div class="bottom-content d-flex">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span style="color:black">
                                        ( 12 )
                                    </span>
                                </div>
                                <b>
                                    1234.23 USD
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-area-two -->

<!-- request-area -->
<section class="request-area-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="request-content-two">
                    <div class="section-title-two white-title mb-15">
                        <h2 class="title">
                            قم بتواصل معنا
                        </h2>
                    </div>
                    <p>
                        تعتمد الوكالة على التواصل مع عملائها و متابعيها بشكل دائم من اجل حل مشاكلهم و الاطلاع على استفساراتهم و ملاحظاتهم
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="request-form-wrap">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="text" placeholder="Name *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="email" placeholder="E-mail *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="number" placeholder="Phone *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="request-shape-wrap">
        <img src="{{ asset('front/assets/img/images/h2_request_shape01.png') }}" alt="">
        <img src="{{ asset('front/assets/img/images/h2_request_shape02.png') }}" alt="" data-aos="fade-left" data-aos-delay="200">
    </div>
</section>
<!-- request-area-end -->

<!-- choose-area -->
<section class="choose-area-two">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="choose-img-two">
                    <img src="{{ asset('front/assets/img/images/h4_choose_img.png') }}" alt="">
                    <img src="{{ asset('front/assets/img/images/choose_img_shape01.png') }}" alt="">
                    <img src="{{ asset('front/assets/img/images/choose_img_shape02.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-content-two">
                    <div class="section-title-two white-title mb-30">
                        <span class="sub-title">لماذا نحن أفضل اختيار لك</span>
                        <h2 class="title" data-aos="fade-up" data-aos-delay="0">
                            لدى الخطوة الرائدة العديد من المزايا و الخدمات المهمة و المفيدة
                        </h2>
                    </div>
                    <p data-aos="fade-in" data-aos-delay="2">Morem ipsum dolor sit amet, consectetur adipiscing elita florai psum dolor sit amet, consecteture.Borem.</p>
                    <div class="choose-circle-wrap">
                        <div class="circle-item">
                            <div class="chart" data-percent="55">
                                <div class="circle-content">
                                    <span class="percentage">99%</span>
                                    <p>رضاء عملائنا</p>
                                </div>
                            </div>
                        </div>
                        <div class="circle-item">
                            <div class="chart" data-percent="85">
                                <div class="circle-content">
                                    <span class="percentage">90%</span>
                                    <p>استثمارتنا الناجحة</p>
                                </div>
                            </div>
                        </div>
                        <div class="circle-item">
                            <div class="chart" data-percent="98">
                                <div class="circle-content">
                                    <span class="percentage">100%</span>
                                    <p>منتجات مضمونة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-shape">
        <img src="{{ asset('front/assets/img/images/choose_shape.png') }}" alt="" data-aos="fade-right" data-aos-delay="200">
    </div>
</section>
<!-- choose-area-end -->

<!-- testimonial-area -->
<section class="testimonial-area-five">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="testimonial-img-five">
                    <img src="{{ asset('front/assets/img/images/h5_testimonial_img.png') }}" alt="">
                    <img src="{{ asset('front/assets/img/images/h5_testimonial_shape01.png') }}" alt="" class="shape-one">
                    <img src="{{ asset('front/assets/img/images/h5_testimonial_shape02.png') }}" alt="" class="shape-two">
                    <img src="{{ asset('front/assets/img/images/h5_testimonial_shape03.png') }}" alt="" class="shape-three">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-content-five">
                    <div class="section-title title-three mb-50">
                        <span class="sub-title">تجارب عملائنا و ارائهم</span>
                        <h2 class="title">تهتم دائما منصتنا على تحسين خدماتها لتنول رضا عملائها </h2>
                    </div>
                    <div class="testimonial-item-wrap-five">
                        <div class="testimonial-active-five">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="content-top">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="{{ asset('front/assets/img/icons/quote.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <p>“ لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت.</p>
                                    <div class="testimonial-avatar">
                                        <div class="avatar-thumb">
                                            <img src="{{ asset('front/assets/img/images/testi_avatar01.png') }}" alt="">
                                        </div>
                                        <div class="avatar-info">
                                            <h2 class="title">Mr.Robey Alexa</h2>
                                            <span>CEO, Gerow Agency</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="content-top">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="{{ asset('front/assets/img/icons/quote.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <p>“ لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت.</p>
                                    <div class="testimonial-avatar">
                                        <div class="avatar-thumb">
                                            <img src="{{ asset('front/assets/img/images/testi_avatar02.png') }}" alt="">
                                        </div>
                                        <div class="avatar-info">
                                            <h2 class="title">Mr.Robey Alexa</h2>
                                            <span>CEO, Gerow Agency</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-nav-five"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->
@endsection
