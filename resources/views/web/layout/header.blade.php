<div class="container-fluid">
    <div class="row">
        <div class="col-8 col-lg-3 mb-3 ">
            @include('web.elements.logo_part')
        </div>
        <div class="col-4 col-lg-9 d-flex justify-content-end align-items-center">
            <span class="navbar navbar-expand-lg mb-3">
                <div class="navbar-toggler nav-tog" type="button" aria-controls="navigation" aria-expanded="false">
                    <span class="text-white" ><i class="ri-menu-fill size-3"></i></span>
                </div>
                @include('web.elements.navWidget')
                <ul class="collapse navs navbar-collapse" id="navbarNav">
                    <li class="color-a font-1 px-lg-3">
                        <a href="{{ url('/') }}" class="anchor nav-link hov">Home</a>
                    </li>
                    <li class="color-a font-1 px-lg-3">
                        <a href="{{ url('/about') }}" class="anchor nav-link hov">About</a>
                    </li>
                    <li class="color-a font-1 px-lg-3">
                        {{-- <a href="{{ url('/school-gallery') }}" class="anchor nav-link hov">Event</a> --}}
                        <div class="dropdown">
                            <div class="dropdown-toggle anchor nav-link hov" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Event
                            </div>
                            <ul class="dropdown-menu bg-color-d" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item color-b" href="#">Details</a></li>
                              <li><a class="dropdown-item color-b" href="#">Speakers</a></li>
                              <li><a class="dropdown-item color-b" href="#">Call for Paper</a></li>
                              <li><a class="dropdown-item color-b" href="#">Organizer</a></li>
                            </ul>
                          </div>
                    </li>
                    <li class="color-a font-1 px-lg-3">
                        <a href="{{ url('/all-notices') }}" class="anchor nav-link hov">Blogs</a>
                    </li>
                    <li class="color-a font-1 px-lg-3">
                        <a href="{{ url('/all-blogs') }}" class="anchor nav-link hov">Contact</a>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</div>