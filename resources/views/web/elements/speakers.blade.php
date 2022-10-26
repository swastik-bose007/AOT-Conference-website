@for ($i = 0; $i < 4; $i++)
    <div class="col-6 col-md-3 p-3 mt-3 mt-md-4 mb-5 mb-md-5">
        <figure class="expert">
            <div class="wrap">
                <img src="{{ url('public/appImages/speaker.jpg') }}" class="img-fluid bshd">
            </div>
            <figcaption class="text-center mt-3">
                <span class="color-b fonot-1">Swastik Bose</span>
                <div class="social">
                    <a href="#" class="link mx-2 d-flex justify-content-center align-items-center">
                        <i class="ri-twitter-line"></i>
                    </a>
                    <a href="#" class="link mx-2 d-flex justify-content-center align-items-center">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="#" class="link mx-2 d-flex justify-content-center align-items-center">
                        <i class="ri-linkedin-fill"></i>
                    </a>
                </div>
            </figcaption>
        </figure>
    </div>
@endfor