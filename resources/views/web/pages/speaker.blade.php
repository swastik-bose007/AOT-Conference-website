@extends('web.layout.assembled')
@push('title')
    Speaker
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 col-lg-8 px-2 px-md-5 mt-lg-5 d-flex justify-content-start align-items-center">
                <div class="pt-5 pt-lg-3">
                    <span class="size-1 color-a">Prof. <span class="text-warning">Swastik Bose</span></span><br>
                    <span class="color-c font-2 " style="font-weight: 700">Ast. Professor Lorem, ipsum dolor. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero obcaecati quae consequuntur perferendis voluptatibus placeat illum blanditiis, molestias iure neque.</span>
                </div>
            </div>
            <div class="col-12 col-lg-4 px-md-4 mt-md-5 pt-3">
                <figure class="single">
                    <img src="{{ url('public/appImages/speaker.jpg') }}" class="img-fluid bshd">
                </figure>
            </div>
        </div>
    @endsection
    @section('mid-section')
        <div class="row mt-4 mt-lg-5 mb-3">
            <div class="col-12 d-flex justify-content-center align-items-center px-md-5">
                <div class="color-e d-flex flex-column px-lg-4">
                    <span class="font-2 mt-4" style="font-weight: 700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, libero. Iure cum aliquid et perspiciatis pariatur debitis, repudiandae omnis harum quasi ducimus quod quia in numquam rerum asperiores? Rem aperiam accusantium non! Ab eaque quidem corporis itaque eius officiis fuga officia facere consequuntur qui veritatis assumenda, dolorum voluptate exercitationem inventore ratione dolorem? Quod cumque quas nisi provident eos quidem, aut doloribus. Asperiores aliquid quis nihil aperiam aliquam suscipit sequi ad velit a vitae et, placeat maiores deleniti quas consequatur! Officia at blanditiis corporis culpa inventore ab provident vel? Expedita iusto illo distinctio non reiciendis sequi exercitationem. Necessitatibus sit debitis ipsum?
                        <div class="social mt-4">
                            <a href="#" class="linkx mx-2 d-flex justify-content-center align-items-center">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="#" class="linkx mx-2 d-flex justify-content-center align-items-center">
                                <i class="ri-mail-line"></i>
                            </a>
                            <a href="{{ url('/all-speakers/speaker') }}" class="linkx mx-2 d-flex justify-content-center align-items-center">
                                <i class="bi bi-info"></i>
                            </a>
                        </div>
                </div>
            </div>
            <div class="col-12 px-lg-5 mt-5">
                
            </div>
        </div>
    @endsection
