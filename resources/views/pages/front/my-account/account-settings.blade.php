@extends('layouts.master_front')

@section('content')
 <!-- project-details-area -->
 <section class="project-details-area pt-120 pb-120 page-bg">
    <div class="container">
        <div class="row">
            <div class="dashboard login-form d-flex">
                <div class="menu-account">
                    @include('inc.customer_menu')
                </div>
                <div class="content-page">
                    <h4>مرجبا {{ auth()->user()->name }}</h4>
                    <p style="width: 80%;">
                        يمكنك تعديل حسابك من خلال هذة اللوحة
                    </p>
                    <div class="form-login">
                        <form method="POST" action="{{ route('update-account') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الاسم</label>
                                        <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رقم الجوال</label>
                                        <input type="text" name="phone" value="{{ auth()->user()->phone }}" class="form-control" id="exampleInputPassword1" placeholder="رقم الجوال">
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
                                        <input type="email" value="{{ auth()->user()->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الالكترونى" readonly>
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
                           
                            <button type="submit" class="btn btn-primary btn-sm">
                                تعديل الحساب
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-details-area-end -->
@endsection