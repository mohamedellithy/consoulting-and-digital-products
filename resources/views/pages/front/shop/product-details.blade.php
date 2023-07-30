@extends('layouts.master_front')

@section('title')
{{ $product->name }}
@endsection

@section('meta_tags')
<meta name="description" content="{{ $product->meta_description ?: get_settings('meta_description') }} ">
<meta name="title" content="{{ $product->meta_name ?: $product->name }} ">
@endsection


@section('content')
<!-- team-details-area -->
<section class="team-details-area pt-120 pb-120 page-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="team-details-info-wrap">
                    <div class="team-details-thumb">
                        <img src="{{ upload_assets($product->image_info) }}" alt="">
                    </div>
                    <div class="team-details-info">
                        <ul class="list-wrap d-flex">
                            @if($product->attachments_id)
                                @foreach(GetAttachments($product->attachments_id) as $attachment)
                                    <li>
                                        <img src="{{ upload_assets($attachment) }}"  />
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" style="position: relative;">
                <span class="badge bg-danger price-value">
                    {{ formate_price($product->price) }}
                </span>
                <div class="team-details-content">
                    <h2 class="title">
                        {{ $product->name }}
                    </h2>
                    <span>
                        منتج رقمي
                    </span>

                    <div class="rating" style="color:orange">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(123)</span>
                    </div>
                    <br/>
                    <b>نبذة عن المنتج</b>
                    <p>
                        {{ $product->short_description }}
                    </p>
                    <br/>
                    <b>نوع المنتج</b>
                    <p>
                        <span class="badge bg-info">
                           {{ $product->downloads ? ucfirst($product->downloads->download_type) : 'Not Selected' }}
                        </span>
                    </p>
                    <br/>
                    <form action="{{ route('buy_now') }}"" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="qty"        value="1" />
                        <button type="submit" class="btns btns-secondary-color">
                                شراء الأن
                        </button>
                    </form>
                    <br/>
                    <br/>
                    <b>تفاصيل المنتج</b>
                    <p>
                       {!! $product->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-details-area-end -->
@endsection
