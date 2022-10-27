<div class="swiper-wrapper">
    @for ($i = 0; $i < 4; $i++)
        <div class="swiper-slide">
            <div class="label">
                Full Pass
            </div>
            <div class="ticket">
                <div class="price">
                    ₹ <span class="color-c">500</span>
                </div>
                <div class="perks">
                    <span>Lorem ipsum dolor sit amet.</span>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <span>Lorem ipsum dolor sit amet.</span>
                </div>
                <a href="#" class="buy mt-3">
                    Book Ticket
                </a>
            </div>
        </div>
    @endfor
</div>
<div class="swiper-button-next text-warning"></div>
<div class="swiper-button-prev text-warning"></div>
<div class="swiper-pagination"></div>
