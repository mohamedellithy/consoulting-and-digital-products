@extends('layouts.master_front')

@section('content')
<section class="container register page-bg">
    <div class="row">
        <div class="d-flex register-form">
            <div class="form-login">
                <div class="heading">
                    <h4>انشاء حساب جديد</h4>
                    <p class="description">
                        يمكنك انشاء حساب جديد فى منصتنا و الاستفادة بخدماتنا و منتجاتنا الرقمية
                    </p>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">الاسم</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">رقم الجوال</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="رقم الجوال">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">البريد الالكترونى</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الالكترونى">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">كلمة المرور</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">تأكيد المرور</label>
                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="تأكيد المرور">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">تذكرنى</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">انشاء حساب جديد</button>
                    <br/>
                    <p class="bottom-description text-center">
                        هل لديك حساب ؟
                        <a href="{{ route('login') }}">تسجيل الدخول</a>
                    </p>
                </form>
            </div>
            <div class="banner-register">
                <div class="left-banner">
                    <img src="{{ asset('front/assets/img/images/h3_testimonial_img.jpg') }}" class="" />
                </div>
            </div>
        </div>
    </div>
</section>
@endsection