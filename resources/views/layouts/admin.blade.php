<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bandienthoai.vn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/oder.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="container text-center header-top">
                <div class="row">
                    <div class="col-12">
                        <a href="" class=""><img src="{{ asset('assets/imgs/logo.png') }}"
                                class="img-fluid header-img" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="admin-header fw-semibold">
                            Welcome to Admin Page
                        </h1>
                    </div>
                </div>
            </div>
            <div class="bg-primary-subtle header-bot">
                <div class="container">
                    <nav class="navbar navbar-expand p-0">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                                <ul class="navbar-nav fs-6 nav-header">
                                    <li class="nav-item">

                                        <a class="nav-link" href="{{ route('home.index') }}">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('category.index') }}">Quản lý danh mục</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('product.index') }}">Quản lý sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.index') }}">Quản lý người dùng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('order.index') }}">Quản lý đơn hàng</a>
                                    </li>
                                </ul>
                                <p class="admin-name h-100 m-0 d-flex">
                                    @if (Session::has('admin'))
                                        <span>Xin chào {{ Session::get('admin') }}</span>
                                    @endif
                                    <a class="nav-link text-primary" href="{{ route('Admin.logout') }}"> - Đăng
                                        xuất</a>

                                </p>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            @yield('dashboard')

        </div>

        {{-- <script>
        const btnhiden = document.querySelector('#btnhiden');
        const modal = document.querySelector('.modal-notify');
        const notifyContent = document.querySelector('.notify');
        
        notifyContent.addEventListener('click', function(e) {
            e.stopPropagation();
        })
        
        btnhiden.addEventListener('click', function() {
            modal.classList.remove('show');
        })
        
        modal.addEventListener('click', function() {
            modal.classList.remove('show');
        })
        </script> --}}
    </div>
</body>

</html>
