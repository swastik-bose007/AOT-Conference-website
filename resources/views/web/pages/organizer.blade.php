@extends('web.layout.assembled')
@push('title')
    Organizer
@endpush
@section('up-section')
    <div class="container px-4 mx-0" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 px-2 px-md-5 mt-lg-5">
                <span class="size-1 color-a">ORGANIZING COMMITTEE <span class="text-warning">AND MEMBERS</span></span><br>
                <span class="color-c font-2">Conference Organizers</span>
            </div>
            {{-- <div class="col-12 px-3 px-md-5">
            <div class="mt-3 mt-md-5">
                @include('web.elements.counter')
            </div>
        </div> --}}
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
        <div class="row mt-4 mt-lg-5 mb-3 px-md-5">
            <div class="col-12 text-start d-flex flex-column">
                <div class="organizer mt-3">
                    <span class="size-4 color-b font-4">Academy of Technology</span>
                    <span class="font-2 color-e" style="font-weight: 700">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Quia saepe recusandae dolor assumenda, tempore ratione illum officiis rerum,
                        ducimus doloremque itaque voluptates ex unde quam voluptatem ipsum? Asperiores facere reprehenderit
                        quasi error illo ullam voluptate officiis minus voluptatum eligendi excepturi quia explicabo
                        suscipit quidem, exercitationem nobis veritatis, autem dicta. Eveniet modi sit dolore labore
                        molestiae adipisci sequi corporis saepe! Soluta impedit amet accusamus ab, veniam sint dolorem quos
                        commodi totam odit vitae dolores, corrupti quasi perferendis doloribus iste repudiandae fuga illo!
                        Et dolore odio autem quos veniam quas temporibus, quisquam alias excepturi doloremque nobis
                        doloribus similique, illo labore, consequuntur dignissimos minus deserunt voluptatibus esse
                        reprehenderit repellendus quod numquam possimus. Hic ad, deserunt corrupti inventore porro tenetur
                        deleniti voluptas explicabo quas, aliquam eum. Amet praesentium, dolore atque iste quas aliquam
                        voluptatibus, ipsum reiciendis natus, eius nesciunt quaerat enim molestiae obcaecati. Tempore,
                        exercitationem impedit dolores aperiam id eos rem reiciendis? Excepturi, minus.
                    </span>
                    </span>
                </div>
            </div>
            @for ($i = 0; $i < 10; $i++)
                @include('web.elements.committeeView')
            @endfor
        </div>
    @endsection
