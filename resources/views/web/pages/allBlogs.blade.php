@extends('web.layout.assembled')
@push('title')
    All Blogs
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-5">
                <span class="size-1 color-a">GET FROM OUR <span class="text-warning">NEWS AND ARTICLES</span></span><br>
                <span class="color-c font-2">Our Blog Post</span>
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
            <div class="col-12 d-flex justify-content-center align-items-center px-md-5">
                <div class="color-e d-flex flex-column px-lg-4 mt-3 mt-md-0 ">
                    <span class="font-2 mt-2 mt-md-4" style="font-weight: 700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit adipisci mollitia id dolorem exercitationem, dignissimos obcaecati non quae optio inventore, delectus, cum eveniet praesentium vitae quidem modi quaerat similique harum? Veniam quibusdam quos blanditiis aut. Ipsa, est. Magnam nesciunt quaerat quisquam aspernatur, sed reprehenderit eligendi ipsa labore, iste quidem, alias perspiciatis excepturi. Minus, obcaecati? Tempora culpa at impedit labore quam libero rerum officiis reiciendis reprehenderit pariatur laboriosam, ea esse ratione provident asperiores dicta illum itaque velit blanditiis cumque fugiat! Sunt excepturi impedit fuga provident ipsa! Quod quam excepturi inventore corrupti consequuntur ab soluta nemo, ipsam iusto fugiat sequi commodi eaque culpa tempore unde animi deleniti quia, facilis, doloremque eligendi quidem ut delectus? Necessitatibus delectus quos adipisci repudiandae nam eligendi, illo, minima provident error aperiam quisquam sit praesentium? Deserunt obcaecati sequi nam consequuntur ratione aliquid, et velit molestias ipsam? Ducimus commodi facere veniam veritatis inventore corrupti ipsa beatae, vel quisquam laboriosam?</span>
                </div>
            </div>
            @for ($i = 0; $i < 10; $i++)
                <div class="col-12 col-md-4 px-2 px-md-5  mt-4 mt-md-5">
                    @include('web.elements.articles')
                </div>
            @endfor
        </div>
    @endsection
