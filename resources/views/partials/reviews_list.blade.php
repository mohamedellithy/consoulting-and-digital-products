@forelse($reviews as $review)
    <div class="review-card-section col-md-12">
        <div class="top-section-review">
            <div class="right-review">
                <img class="reviewer-avatar" src="{{ upload_assets(null,false,"assets/img/avatars/user_avatar.png") }}" />
                <span class="reviewr-name">
                    {{ $review->customer->name }}
                </span>
            </div>
            <div class="review-points">
                <div class="rating">
                    @if($review->degree > 5)
                        @php $review->degree = 5 @endphp
                    @endif

                    ( {{ $review->degree }} )
                    @for($i = 1;$i <= $review->degree;$i++)
                        <i class="fas fa-star active"></i>
                    @endfor

                    @for($i=1;$i <= 5-$review->degree;$i++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
            </div>
        </div>
        <div class="bottom-section-review">
            <p>
                {{ $review->review }}
            </p>
        </div>
    </div>
@empty
@endforelse