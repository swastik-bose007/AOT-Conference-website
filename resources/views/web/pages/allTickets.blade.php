@extends('web.layout.assembled')
@push('title')
    Ticket Slabs
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-5">
                <span class="size-1 color-a">BOOK YOUR SEAT <span class="text-warning">FOR THE EVENT</span></span><br>
                <span class="color-c font-2">See the ticket pricings</span>
            </div>
            <div class="col-12 col-lg-7 mt-5 px-3 px-md-5 d-flex justify-content-start align-items-center">
                <a href="#" class="anchor custom-btn d-flex justify-content-center align-items-center font-1">
                    <span class="d-flex justify-content-center align-items-center"><i
                            class="ri-map-2-fill"></i>&nbsp;&nbsp;Direction</span>
                </a>
            </div>
        </div>
    @endsection
    @section('mid-section')
        <div class="row mt-4 mt-lg-5 mb-3">
            <div class="col-12 swiper mySwiper-2 px-2 mt-4 mt-md-5">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="swiper-slide">
                            @include('web.elements.tickets')
                        </div>
                    @endfor
                </div>
                <div class="swiper-button-next text-warning"></div>
                <div class="swiper-button-prev text-warning"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    @endsection
