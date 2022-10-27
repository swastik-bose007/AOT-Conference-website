@extends('web.layout.assembled')
@push('title')
    Accomodation
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-5">
                <span class="size-1 color-a">ACCOMMODATION 
                     <span class="text-warning">FOR ALL ATTENDEES</span></span><br>
                <span class="color-c font-2">See our accommodation facilities</span>
            </div>
            <div class="col-12 col-lg-7 mt-5 px-3 px-md-5 d-flex justify-content-start align-items-center">
                <a href="#" class="anchor custom-btn d-flex justify-content-center align-items-center font-1">
                    <span class="d-flex justify-content-center align-items-center"><i
                            class="ri-coupon-2-fill"></i>&nbsp;&nbsp;Get Ticket</span>
                </a>
                <a href="#" class="anchor custom-btn d-flex justify-content-center align-items-center font-1">
                    <span class="d-flex justify-content-center align-items-center"><i
                            class="ri-map-2-fill"></i>&nbsp;&nbsp;Direction</span>
                </a>
            </div>
        </div>
    @endsection
    @section('mid-section')
        <div class="row mt-4 mt-lg-5 mb-3">
            @for ($i = 0; $i < 3; $i++)
                @include('web.elements.acccomodationBlock')
            @endfor
        </div>
    @endsection
