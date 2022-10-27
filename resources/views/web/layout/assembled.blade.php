<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- ------------------------------------------------------------------- --}}
    {{-- TITLE --}}
    {{-- ------------------------------------------------------------------- --}}
    <title>IC | @stack('title')</title>
    {{-- ------------------------------------------------------------------- --}}
    {{-- ICON --}}
    {{-- ------------------------------------------------------------------- --}}
    <link rel="icon" href="{{ url('public/appImages/ic-logo-ta.png') }}">
    {{-- ------------------------------------------------------------------- --}}
    {{-- STYLES --}}
    {{-- ------------------------------------------------------------------- --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/appStyles/global.css') }}">
    <link rel="stylesheet" href="{{ url('public/appStyles/header.css') }}">
    <link rel="stylesheet" href="{{ url('public/appStyles/home.css') }}">
    <link rel="stylesheet" href="{{ url('public/appStyles/footer.css') }}">
    {{-- ------------------------------------------------------------------- --}}
    {{-- SWIPER SLIDER-CDN --}}
    {{-- ------------------------------------------------------------------- --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>
<body>
    <div id="pre-Loader"></div>
    <div class="container-fluid" id="bg-slide">
        <div class="row nav-strip ">
            <div class="col-12 mx-0 px-0" style="height: 10px;">
                @include('web.layout.header')
            </div>
            <div class="col-12 mx-0 px-0">
                @yield('up-section')
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 mx-0 px-0">
                @yield('mid-section')
            </div>
            <div class="col-12 px-0 mx-0 ">
                @include('web.layout.footer')
            </div>
        </div>
    </div>
    {{-- ------------------------------------------------------------------- --}}
    {{-- SCRIPTS --}}
    {{-- ------------------------------------------------------------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="{{ url('public/appScripts/global.js') }}"></script>
    <script src="{{ url('public/appScripts/filter.js') }}"></script>
    {{-- ------------------------------------------------------------------- --}}
    {{-- SWIPER SLIDER SCRIPTS --}}
    {{-- ------------------------------------------------------------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ url('public/appScripts/slider.js') }}"></script>
</body>
</html>