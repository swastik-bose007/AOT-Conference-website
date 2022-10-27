@extends('web.layout.assembled')
@push('title')
    All Events
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-5">
                <span class="size-1 color-a">JOIN INDIAS BEST <span class="text-warning">TECH CONFERENCE</span></span><br>
                <span class="color-c font-2">Our Conference Schedules</span>
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
            <div class="col-12 ">
                <div class="row px-lg-5 mx-lg-2">
                    <div class="col-6 col-md-3 mt-1 d-flex justify-content-center align-items-center list active list1"
                        data-filter="day-1">
                        <div class="anchor day-hov p-3 mt-3 d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column text-center">
                                MONDAY
                                <span class="color-e size-6">Oct 26, 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mt-1 d-flex justify-content-center align-items-center list"
                        data-filter="day-2">
                        <div class="anchor day-hov p-3 mt-3 d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column text-center">
                                TUESDAY
                                <span class="color-e size-6">Oct 27, 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mt-1 d-flex justify-content-center align-items-center list"
                        data-filter="day-3">
                        <div class="anchor day-hov p-3 mt-3 d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column text-center">
                                WEDNESDAY
                                <span class="color-e size-6">Oct 28, 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mt-1 d-flex justify-content-center align-items-center list"
                        data-filter="day-4">
                        <div class="anchor day-hov p-3 mt-3 d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column text-center">
                                THURSDAY
                                <span class="color-e size-6">Oct 29, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row mt-3">
                    @for ($i = 0; $i < 3; $i++)
                        @include('web.elements.day-1')
                    @endfor
                    @for ($i = 0; $i < 3; $i++)
                        @include('web.elements.day-2')
                    @endfor
                    @for ($i = 0; $i < 3; $i++)
                        @include('web.elements.day-3')
                    @endfor
                    @for ($i = 0; $i < 3; $i++)
                        @include('web.elements.day-4')
                    @endfor
                </div>
            </div>
        </div>
    @endsection
