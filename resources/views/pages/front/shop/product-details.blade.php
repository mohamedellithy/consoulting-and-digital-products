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
                        @include('partials.stars_list')
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
                <div class="row">
                    <div class="clients-reviews">
                        <h5> يسعدنا تقيمك على المنتج</h5>
                            @if(auth()->user() && ($my_review = auth()->user()->reviews()->where('product_id',$product->id)->first()))
                            <div id="my-review-show" class="review-card-section my-review col-md-12">
                                <div class="top-section-review">
                                    <div class="right-review">
                                        <img class="reviewer-avatar" src="{{ upload_assets(null,false,"assets/img/avatars/user_avatar.png") }}" />
                                        <span class="reviewr-name">
                                            {{ $my_review->customer->name }}
                                        </span>
                                    </div>
                                    <div class="review-points">
                                        <div class="rating">
                                            @if($my_review->degree > 5)
                                                @php $my_review->degree = 5 @endphp
                                            @endif

                                            ( {{ $my_review->degree }} )
                                            @for($i = 1;$i <= $my_review->degree;$i++)
                                                <i class="fas fa-star active"></i>
                                            @endfor

                                            @for($i=1;$i <= 5-$my_review->degree;$i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-section-review">
                                    <p>
                                        {{ $my_review->review }}
                                    </p>
                                </div>
                                <div class="give-me" style="text-align: left;padding: 15px 0px;">
                                    <button id="toggleEditReview" class="btn btn-info btn-sm" style="margin:auto">
                                        تعديل التقيم
                                    </button>
                                </div>
                            </div>
                            @endif
                            <form id="form-review" action="{{ route('add_review_on_product',$product->id) }}#my-review-show" @if(auth()->user() && $my_review) style="display:none" @endif method="post">
                                @csrf
                                <input type="hidden" @if(auth()->user() && $my_review) value="{{ $my_review->degree }}" @endif id="my-review-start" name="degree" required/>
                                <div class="review-card-section col-md-12">
                                    <div class="top-section-review">
                                        <div class="right-review">
                                            <img class="reviewer-avatar" src="{{ upload_assets(null,false,"assets/img/avatars/user_avatar.png") }}" />
                                            <span class="reviewr-name">{{ auth()->user() ? auth()->user()->name : ''  }}</span>
                                        </div>
                                        <div class="review-points">
                                            <div class="rating give-rate">
                                                @if(auth()->user() && $my_review)
                                                    @if($my_review->degree > 5)
                                                        @php $my_review->degree = 5 @endphp
                                                    @endif

                                                    ( {{ $my_review->degree }} )
                                                    @for($i = 1;$i <= $my_review->degree;$i++)
                                                        <i class="fas fa-star active"></i>
                                                    @endfor

                                                    @for($i=1;$i <= 5-$my_review->degree;$i++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                @else
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-section-give" style="paading:0px">
                                        <textarea rows="5" name="review" class="form-control" required>@if(auth()->user() && $my_review) {{ $my_review->review }}  @endif</textarea>
                                    </div>
                                    <div class="give-me" style="text-align: left;padding: 15px 0px;">
                                        <button type="submit" class="btn btn-success btn-sm" style="margin:auto">
                                            اضافة تقيم
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="clients-reviews list-client-reviews">
                        <h5> اراء العملاء</h5>
                        @forelse($reviews as $review)
                            @include('partials.reviews_list_1')
                        @empty
                        <div class="alert alert-warning">
                            التقيمات غير متوفرة على هذا المنتج
                        </div>
                        @endforelse
                    </div>
                    @if(!$reviews->isEmpty())
                        <div class="load-more" style="text-align: left;">
                            <button onClick="ajax_load_medias()" class="btn btn-warning btn-sm" style="margin:auto">
                                تحميل المزيد
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-details-area-end -->
@endsection

@push('scripts')
<script>
    jQuery(document).ready(function(){
        jQuery('.rating.give-rate i').on('mouseover',function(){
            jQuery(this).toggleClass('active');
            jQuery(this).prevAll().addClass('active');
            jQuery(this).nextAll().removeClass('active');
        });
        jQuery('.rating.give-rate i').on('mouseout',function(){
            jQuery('#my-review-start').val(jQuery('.rating.give-rate i.active').length);
        });
        jQuery('#toggleEditReview').on('click',function(){
            jQuery('.review-card-section.my-review').slideUp(100);
            jQuery('#form-review').slideDown(100);
        });
    });
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ajax call
    let offset = 5;
    function ajax_load_medias(data = {}) {
        offset +=5;
        $.ajax({
            type: 'GET',
            url: "{{ route('ajax-paginate-review-lists') }}",
            data: {
                product_id:"{{ $product->id }}",
                offset: offset
            },
            success: function(data) {
                jQuery('.list-client-reviews').append(data._result);
                if (data._result.length == 0) {
                    jQuery('.load-more').hide();
                }
            }
        });
    }
</script>


@endpush
