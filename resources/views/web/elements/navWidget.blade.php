<div class="offcanvas offcanvas-start navigation bg-color-c" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header px-4 ">
        <div class="" style="width: 60%">
            @include('web.elements.logo_part')
        </div>
        <div class=" text-reset color-b" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-fill color-c" style="font-size: 2.5rem"></i>
        </div>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-12 page">
                <span class="size-4 color-a font-1">Explore</span>
                <div class="foot-alg mt-3">
                    <a href="{{ url('/') }}" class="foot-link font-2"><span class="foot-list"><i
                                class="ri-arrow-right-s-line color-8"></i>Home</span></a>
                    <a href="{{ url('/about') }}" class="foot-link font-2"><span class="foot-list"><i
                                class="ri-arrow-right-s-line color-8"></i>About</span></a>
                    <a class="foot-link font-2"><span class="foot-list" data-bs-toggle="collapse"
                            href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample"><i
                                class="ri-arrow-right-s-line color-8"></i>Event</span></a>
                    <div class="collapse" id="collapseExample">
                        <div class="bg-transparent foot-alg px-5 py-2">
                            <a class="color-a font-2 foot-link py-1" href="{{ url('/all-events') }}">All Events</a>
                            <a class="color-a font-2 foot-link py-1" href="{{ url('/all-speakers') }}">Speakers</a>
                            <a class="color-a font-2 foot-link py-1" href="{{ url('/call-for-paper') }}">Call for
                                Paper</a>
                            <a class="color-a font-2 foot-link py-1" href="{{ url('/organizer') }}">Organizer</a>
                            <a class="color-a font-2 foot-link py-1" href="{{ url('/accomodation') }}">Accomodation</a>
                        </div>
                    </div>
                    <a href="{{ url('/all-blogs') }}" class="foot-link font-2"><span class="foot-list"><i
                                class="ri-arrow-right-s-line color-8"></i>Blogs</span></a>
                    <a href="{{ url('/contact-us') }}" class="foot-link font-2"><span class="foot-list"><i
                                class="ri-arrow-right-s-line color-8"></i>Contact</span></a>
                </div>
            </div>
            <div class="col-12 head-list up-pad">
                <a href="#" class="foot-social mx-2">
                    <i class="ri-linkedin-fill p-3 bg-color-hov"></i>
                </a>
                <a href="#" class="foot-social mx-2">
                    <i class="ri-twitter-fill p-3 bg-color-hov"></i>
                </a>
                <a href="#" class="foot-social mx-2">
                    <i class="ri-facebook-fill p-3 bg-color-hov"></i>
                </a>
                <a href="#" class="foot-social mx-2">
                    <i class="ri-mail-line p-3 bg-color-hov"></i>
                </a>
            </div>
        </div>
    </div>
</div>
