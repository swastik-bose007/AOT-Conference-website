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
    {{-- STYLES --}}
    {{-- ------------------------------------------------------------------- --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div id="pre-Loader"></div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                @include('web.layout.header')
            </div>
            <div class="col-12 mx-0 px-0">
                @yield('mid-section')
            </div>
            <div class="col-12">
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
    {{-- ------------------------------------------------------------------- --}}
    {{-- SWIPER SLIDER SCRIPTS --}}
    {{-- ------------------------------------------------------------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>