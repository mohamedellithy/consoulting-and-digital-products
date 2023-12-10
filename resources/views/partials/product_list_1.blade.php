<div class="col-lg-3">
    <div class="services-item">
        <div class="services-content">
            <!--<div class="content-top">
                    <div class="icon">
                        <i class="flaticon-briefcase"></i>
                    </div>
                    <h2 class="title">Business Analysis</h2>
                </div> -->
            <div class="services-thumb">
                <img src="{{ upload_assets($product->image_info) }}" alt="">
                <a href="{{ url('product/'.$product->slug) }}" class="btns transparent-btn">
                   تفاصيل المنتج
                </a>
            </div>
            <div class="list-wrap">
                <h6 class="title">
                    {{ $product->name }}
                </h6>
                <div class="bottom-content d-flex">
                    @include('partials.stars_list')
                    <b>
                        {{ formate_price($product->price) }}  / {{ convert_price_to_Omr($product->price) }}
                    </b>
                </div>
                <div class="frame-buy">
                     <form action="{{ route('buy_now') }}"" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="qty"        value="1" />
                        <button type="submit" class="btns btns-secondary-color">
                            شراء المنتج
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
