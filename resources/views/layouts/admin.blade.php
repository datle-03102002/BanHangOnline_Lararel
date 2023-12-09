<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/index.js') }}"></script>
</head>

<body>
    <header class="header d-flex justify-content-center align-items-center ">
        <div class="d-flex align-items-center justify-content-center ">
            {{-- <a href="{{ route('admin.home') }}"> --}}
            <span>Cửa hàng bán điện thoại</span>
            </a>
        </div>
    </header>
    <nav>
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="fa-solid fa-house"></i>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="fa-solid fa-house"></i>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="fa-solid fa-house"></i>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="fa-solid fa-house"></i>
                    <span>Trang chủ</span>
                </a>
            </li>
        </ul>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
