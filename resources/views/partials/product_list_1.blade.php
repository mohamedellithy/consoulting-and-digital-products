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
                        {{ formate_price($product->price) }}
                    </b>
                </div>
                <div class="frame-buy">
                    <a href="product-details.html" class="btns btns-secondary-color">
                        شراء المنتج
                     </a>
                </div>
            </div>
        </div>
    </div>
</div>
