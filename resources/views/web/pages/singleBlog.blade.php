@extends('web.layout.assembled')
@push('title')
    Blog
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-5 d-flex justify-content-start align-items-center">
                <span class="size-1 color-a">IOT in modern Technology<br>
                <span class="color-c font-2 h4">- By Swastik Bose</span>
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
                        placeat, modi repellendus. Culpa eaque a iure eius voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum architecto amet sed vel, exercitationem magni provident, corrupti corporis repudiandae accusamus deserunt doloribus porro sequi facilis qui aliquam repellat placeat eligendi, aperiam unde aspernatur quasi! Illum animi modi labore voluptatum recusandae officiis? Tenetur quis dolorum repellat a. Ducimus dolore dolorem inventore, optio error repudiandae! Eveniet, eaque itaque quaerat sequi veniam perspiciatis rerum quasi cupiditate, fugit deleniti, odit modi! Minima voluptatem illum itaque, quae omnis tempore voluptate sunt incidunt blanditiis aliquid quis facilis enim deleniti, ea nemo obcaecati id nostrum distinctio? Et enim dolores vero minus aperiam fugiat corrupti velit, molestiae quidem?
                </div>
            </div>
            <div class="col-12 px-lg-5 mt-5">
                <figure class="about-imgx card">
                    <img src="{{ url('public/appImages/slide-1.jpg') }}" class="img-fluid">
                    {{-- <figcaption class="carousel-caption caption">
                        <span class="font-3 size-res over-cap">CONFERENCE</span><br>
                        <span class="font-2 size-2">international conference 2023</span>
                    </figcaption> --}}
                </figure>
            </div>
        </div>
    @endsection
