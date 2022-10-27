<div class="swiper-wrapper">
    @for ($i = 0; $i < 4; $i++)
        <div class="swiper-slide">
            <figure class="expertx">
                <div class="wrap">
                    <img src="{{ url('public/appImages/speaker.jpg') }}" class="img-fluid bshd">
                </div>
                <figcaption class="text-center mt-3">
                    <span class="color-b fonot-1">Swastik Bose</span>
                    <div class="mt-2 font-2 size-5" style="font-weight: 700">
                        (ORGANIZING MEMBER)
                    </div>
                </figcaption>
            </figure>
        </div>
    @endfor
</div>
<div class="swiper-button-next text-warning"></div>
<div class="swiper-button-prev text-warning"></div>
<div class="swiper-pagination"></div>