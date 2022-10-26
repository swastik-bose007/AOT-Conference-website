<div class="swiper-wrapper">
    @for ($i = 0; $i < 4; $i++)
        <div class="swiper-slide">
            <figure class="article">
                <img src="{{ url('public/appImages/slide-1.jpg') }}" class="img-fluid">
                <figcaption class="context px-4 pt-1">
                    <span class="color-a font-1 size-3 text-start">IOT in modern Technology
                        <br>
                        <span  class="color-c font-2 h6 text-start">Writen by Swastik Bose</span>
                    </span>
                    <a href="#" class="anchor color-f mt-1 d-flex justify-content-start align-items-center">See More&nbsp;&nbsp;<i
                        class="ri-arrow-right-line"></i></a>
                </figcaption>
            </figure>
        </div>
    @endfor
</div>
<div class="swiper-button-next text-warning"></div>
<div class="swiper-button-prev text-warning"></div>
<div class="swiper-pagination"></div>
