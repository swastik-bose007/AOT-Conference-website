@extends('web.layout.assembled')
@push('title')
    Home
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-5">
                <span class="size-1 color-a"><span class="color-c">68</span>th INTER<span class="text-warning">NATIONAL</span>
                    CONFERENCE</span><br>
                <span class="color-c font-2">an international summit for science and technology</span>
            </div>
            <div class="col-12 px-3 px-md-5">
                <div class="mt-3 mt-md-5">
                    @include('web.elements.counter')
                </div>
            </div>
            <div class="col-12 col-lg-7 mt-5 px-3 px-md-5 d-flex justify-content-start align-items-center">
                <a href="{{ url('/allTickets') }}"
                    class="anchor custom-btn d-flex justify-content-center align-items-center font-1">
                    <span class="d-flex justify-content-center align-items-center"><i
                            class="ri-coupon-2-fill"></i>&nbsp;&nbsp;Get Ticket</span>
                </a>
                <a href="#" class="anchor custom-btn d-flex justify-content-center align-items-center font-1">
                    <span class="d-flex justify-content-center align-items-center"><i
                            class="ri-map-2-fill"></i>&nbsp;&nbsp;Direction</span>
                </a>
            </div>
            {{-- <div class="col-12 adjust">
            
        </div> --}}
        </div>
    @endsection
    @section('mid-section')
        <div class="row mt-4 mt-lg-5">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="text-center color-e d-flex flex-column">
                    <span class="h6 mb-3 mb-md-0">Find our agendas</span>
                    <span class="text-center size-4 color-b font-1" style="letter-spacing: 0.0001px">Why You Should <span
                            class="color-d">Attend the Conference</span></span>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="row px-0 px-lg-5 mt-2 mt-md-5 d-flex justify-content-center align-items-center">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-12 col-md-6 col-lg-4 px-lg-3">
                            <figure class="labels mt-3 mt-md-4 mt-lg-0">
                                <img src="{{ url('appImages/network.png') }}" class="img-fluid avatar p-3">
                                <figcaption class="px-4 mt-3 color-a">
                                    <span class="size-3">NETWORK</span><br>
                                    <span class="font-2 color-c">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Consequatur, quae?</span>
                                    <span class="text-start "><a href="#"
                                            class="mt-3 d-flex justify-content-start align-items-center see">See More <i
                                                class="ri-arrow-right-line"></i></a></span>
                                </figcaption>
                            </figure>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="row mt-4 mt-lg-5 mb-3">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center px-md-5">
                <div class="color-e d-flex flex-column px-lg-4">
                    <span class="h6">See about the event</span>
                    <span class="text-start size-4 color-b font-1" style="letter-spacing: 0.0001px">Conferences And
                        Organization <span class="color-d">Seminars</span></span>
                    <span class="font-2 mt-4" style="font-weight: 700">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Nam, exercitationem eos est nostrum deleniti porro, iusto voluptatibus explicabo possimus,
                        distinctio molestiae. Doloremque hic, magni beatae non distinctio vero dignissimos? Similique, optio
                        officiis! Similique fugiat dolore, eligendi a sunt ex non aspernatur nam, itaque minima laborum
                        necessitatibus qui aperiam odio maxime natus amet quam consectetur ratione asperiores aut iste!
                        Saepe pariatur commodi corporis laborum ab voluptas eaque autem error dolore, sit voluptatibus
                        placeat, modi repellendus. Culpa eaque a iure eius voluptates. <a href="{{ url('/about') }}"
                            class="mt-3 d-flex justify-content-start align-items-center see">See More <i
                                class="ri-arrow-right-line"></i></a></span>
                    <div class="row">
                        @include('web.elements.keyDetails')
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-lg-5 mt-5">
                <figure class="about-img card">
                    <img src="{{ url('appImages/slide-1.jpg') }}" class="img-fluid">
                    <figcaption class="carousel-caption caption">
                        <span class="font-3 size-res over-cap">CONFERENCE</span><br>
                        <span class="font-2 size-2">international conference 2023</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="row mt-4 mt-lg-5 mb-3">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="text-center color-e d-flex flex-column">
                    <span class="h6">Our Conference Schedules</span>
                    <span class="text-center size-4 color-b font-1" style="letter-spacing: 0.0001px">Join Worlds Best <span
                            class="color-d">Tech Conference</span></span>
                </div>
            </div>
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
        <div class="row mt-4 mt-lg-5 mb-3 px-lg-5 mx-lg-2">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="text-center color-e d-flex flex-column">
                    <span class="h6">Conference Speakers</span>
                    <span class="text-center size-4 color-b font-1" style="letter-spacing: 0.0001px">Experience With The
                        <span class="color-d">Knowledge Of Our Speakers</span>
                    </span>
                </div>
            </div>
            @for ($i = 0; $i < 4; $i++)
                @include('web.elements.speakers')
            @endfor
        </div>
        <hr class="my-5 px-3 px-md-5 mx-md-5">
        <div class="row mt-4 mt-lg-3 mb-3 pxd">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center px-md-5">
                <div class="color-e d-flex flex-column px-lg-4 mt-3 mt-md-0 ">
                    <span class="h6">Our Blog Post</span>
                    <span class="text-start size-4 color-b font-1" style="letter-spacing: 0.0001px">Get From Our <span
                            class="color-d">News And Articles</span></span>
                    <span class="font-2 mt-2 mt-md-4" style="font-weight: 700">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Nam, exercitationem eos est nostrum deleniti porro, iusto voluptatibus explicabo possimus,
                        distinctio molestiae. Doloremque hic, magni beatae non distinctio vero dignissimos? Similique, optio
                        officiis! Similique.<a href="{{ url('/all-blogs') }}"
                            class="mt-3 d-flex justify-content-start align-items-center see">See More <i
                                class="ri-arrow-right-line"></i></a></span>
                </div>
            </div>
            <div class="col-12 col-lg-6 swiper mySwiper px-2 px-md-3 px-lg-0 mt-4 mt-md-5">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="swiper-slide">
                            @include('web.elements.articles')
                        </div>
                    @endfor
                </div>
                <div class="swiper-button-next text-warning"></div>
                <div class="swiper-button-prev text-warning"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="row mt-4 mt-lg-5 mb-3 pxdd">
            <div class="col-12 d-flex justify-content-center align-items-center px-md-5">
                <div class="color-e text-center d-flex flex-column px-lg-4 mt-3 mt-md-0 ">
                    <span class="h6 text-center">Secure Your Place Now</span>
                    <span class="text-center size-4 color-b font-1" style="letter-spacing: 0.0001px">This Conference Is
                        For You <span class="color-d">Buy Tickets Now!</span></span>
                </div>
            </div>
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
        <div class="row mt-4 mt-lg-5 mb-3 px-lg-5 mx-lg-2">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="text-center color-e d-flex flex-column">
                    <span class="h6">Conference Organizers</span>
                    <span class="text-center size-4 color-b font-1" style="letter-spacing: 0.0001px">Organizing Committee
                        <span class="color-d">And Members</span>
                    </span>
                </div>
            </div>
            <div class="col-12 col-md-6 text-start d-flex flex-column">
                <div class="organizer mt-3">
                    <span class="size-4 color-b font-4">Academy of Technology</span>
                    <span class="font-2 color-e" style="font-weight: 700">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Accusamus voluptatem omnis totam quisquam dolorum doloremque, illum beatae placeat
                        eveniet? Tenetur officia illo similique officiis consectetur, dolores consequatur itaque labore
                        quibusdam expedita excepturi nihil minima ad et quasi error a repellendus deleniti voluptatum totam?
                        Velit odio culpa veniam. Totam, repudiandae eaque?
                        <a href="{{ url('/organizer') }}" class="mt-3 d-flex justify-content-start align-items-center see">See More <i
                                class="ri-arrow-right-line"></i></a></span>
                    </span>
                </div>
            </div>
            <div class="col-12 col-md-6 swiper mySwiper-3 px-2 mt-4 mt-md-5" style="height: 300px">
                @include('web.elements.committee')
            </div>
        </div>
        <div class="row mt-4 mt-lg-5 mb-3 px-lg-5 mx-lg-2">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="text-center color-e d-flex flex-column">
                    <span class="h6">Conference Sponsers</span>
                    <span class="text-center size-4 color-b font-1" style="letter-spacing: 0.0001px">Our Best Promoter
                        <span class="color-d">And Sponsor</span>
                    </span>
                </div>
            </div>
            @for ($i = 0; $i < 4; $i++)
                <div class="col-6 col-md-3 p-3">
                    <figure class="p-3 sponser">
                        <img src="{{ url('appImages/sponser.png') }}" class="img-fluid">
                    </figure>
                </div>
            @endfor
        </div>
    @endsection
