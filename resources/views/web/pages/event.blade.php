@extends('web.layout.assembled')
@push('title')
    Event
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-2">
                {{-- <span class="size-1 color-a">CONFERENCES AND
                    ORGANIZATION <span class="text-warning">SEMINARS</span></span><br>
                <span class="color-c font-2">See about the event</span> --}}
                <div class="mt-2 dynamicx p-md-5">
                    <div class="left">
                        <span class="d-flex justify-content-start align-items-center color-a size-3">
                            <i class="ri-calendar-event-fill"></i>&nbsp;
                            <span class="size-2 color-f">Oct 26, 2023</span>
                        </span>
                        <span class="d-flex justify-content-start align-items-center color-a size-3">
                            <i class="ri-time-line"></i>&nbsp;
                            <span class="size-2 color-f">10:00 AM - 05:00 PM</span>
                        </span>
                        <span class="d-flex justify-content-start align-items-center color-a size-3">
                            <i class="ri-map-2-line"></i>&nbsp;
                            <span class="size-2 color-f">Adisaptagram, Hoogly</span>
                        </span>
                        <span class="d-flex justify-content-start align-items-center color-a size-3">
                            <i class="ri-home-6-line"></i>&nbsp;
                            <span class="size-2 color-f">Auditorium</span>
                        </span>
                    </div>
                    <div class="mid">
                        <span class="size-1 color-a">Conference Topic</span>
                        {{-- <p class="color-c  font-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis debitis recusandae odit harum exercitationem eum ipsum ea placeat, et obcaecati excepturi laboriosam quae sit saepe, laborum distinctio sequi! Nobis, nulla?</p>
                        <div class="mt-3 all-avatars padd">
                            <figure class="features">
                                <img src="{{ url('appImages/speaker.jpg') }}" class="img-fluid avatar-2">
                                <figcaption class="color-g">
                                    Swastik Bose
                                </figcaption>
                            </figure>
                            <a href="{{ url('/all-events/event') }}" class="anchor font-1 view-btn py-2">
                                <span class="d-flex justify-content-center align-items-center px-3">View Details&nbsp;&nbsp;<i class="ri-arrow-right-line"></i>
                                </span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('mid-section')
        <div class="row mt-4 mt-lg-5 mb-3">
            <div class="col-12 d-flex justify-content-center align-items-center px-md-5">
                <div class="color-e d-flex flex-column px-lg-4">
                    <span class="font-2 mt-4" style="font-weight: 700">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Nam, exercitationem eos est nostrum deleniti porro, iusto voluptatibus explicabo possimus,
                        distinctio molestiae. Doloremque hic, magni beatae non distinctio vero dignissimos? Similique, optio
                        officiis! Similique fugiat dolore, eligendi a sunt ex non aspernatur nam, itaque minima laborum
                        necessitatibus qui aperiam odio maxime natus amet quam consectetur ratione asperiores aut iste!
                        Saepe pariatur commodi corporis laborum ab voluptas eaque autem error dolore, sit voluptatibus
                        placeat, modi repellendus. Culpa eaque a iure eius voluptates. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Rerum architecto amet sed vel, exercitationem magni provident,
                        corrupti corporis repudiandae accusamus deserunt doloribus porro sequi facilis qui aliquam repellat
                        placeat eligendi, aperiam unde aspernatur quasi! Illum animi modi labore voluptatum recusandae
                        officiis? Tenetur quis dolorum repellat a. Ducimus dolore dolorem inventore, optio error
                        repudiandae! Eveniet, eaque itaque quaerat sequi veniam perspiciatis rerum quasi cupiditate, fugit
                        deleniti, odit modi! Minima voluptatem illum itaque, quae omnis tempore voluptate sunt incidunt
                        blanditiis aliquid quis facilis enim deleniti, ea nemo obcaecati id nostrum distinctio? Et enim
                        dolores vero minus aperiam fugiat corrupti velit, molestiae quidem?</span>
                </div>
            </div>
            <div class="col-12 px-lg-5 mt-5">
                <div class="mt-3 all-avatars padd">
                    <figure class="features">
                        <img src="{{ url('appImages/speaker.jpg') }}" class="img-fluid avatar-2">
                        <figcaption class="color-b">
                            Swastik Bose
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 mt-3" >
                <a href="{{ url('/allTickets') }}" style="width: 100%"
                        class="anchor custom-btn d-flex justify-content-center align-items-center font-1">
                        <span class="d-flex justify-content-center align-items-center"><i
                                class="ri-coupon-2-fill"></i>&nbsp;&nbsp;Get Ticket</span>
                    </a>
            </div>
        </div>
    @endsection
