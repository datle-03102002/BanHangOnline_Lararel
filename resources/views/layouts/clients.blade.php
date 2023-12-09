<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cửa hàng bán đồ ăn</title>
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <?php
    session_start();
    // include("main.php");
    ?>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="container text-center header-top">
                <div class="row">
                    <div class="col-3">
                        <a href="index.php" class=""><img src="img/logo.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-5 d-flex align-items-center">
                        <form class="d-flex w-100" role="search"
                            action="index.php?navigate=timkiem <?php if (isset($_GET['tukhoa'])) {
                                echo $_GET['tukhoa'];
                            } ?>" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nhập từ khóa tìm kiếm..."
                                name="tukhoa" aria-label="Nhập từ khóa tìm kiếm...">
                            <button class="btn btn-primary" type="submit" name="timkiemsp"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="col-2">
                        <div class="row h-100 align-items-center">
                            <div class="col-3">
                                <i class="fa-solid fa-phone fs-3 ms-4 text-primary"></i>
                            </div>
                            <div class="col-9">
                                <p class="mb-0 fs-6">Tư vấn hỗ trợ</p>
                                <p class="mb-0 fs-5 fw-bold text-primary">0987654321</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row h-100 align-item-center">
                            <div class="col-5">
                                <div class="row h-100 align-items-center">
                                    <div class="col-6">
                                        <div class="cart-block">
                                            <a href="index.php?navigate=giohang"
                                                class="link-underline link-underline-opacity-0 d-block mt-2">
                                                <i class="fa-solid fa-cart-shopping w-100 fs-4"></i>
                                                {{-- <?php
                                        if (isset($_SESSION['carts']) && count($_SESSION['carts']) > 0) {
                                            ?>
                                            <div class="cart-quantity">
                                                <?php
                                                echo count($_SESSION['carts']);
                                                ?>
                                            </div>
                                            <?php
                                        }
                                    ?> --}}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="cart-block">
                                            <a href="index.php?navigate=xemdonhang"
                                                class="link-underline link-underline-opacity-0 d-block mt-2">
                                                <i class="fa-solid fa-truck w-100 fs-4"></i>
                                                {{-- <?php
                                        if (isset($_SESSION['login'])) {
                                            $sql_cart = "SELECT COUNT(*) FROM tbl_cart WHERE id_khachhang = ".$_SESSION['login']."";
                                            $query_cart = mysqli_query($connect, $sql_cart);
                                            $cart_quantity = mysqli_fetch_array($query_cart)[0];
                                            if ($cart_quantity > 0) {
                                                ?>

                                            <div class="cart-quantity" style="right:5px;top:2px;">
                                                <?php
                                                echo $cart_quantity;
                                                ?>
                                            </div>
                                            <?php
                                            }
                                        }
                                    
                                    ?> --}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="row h-100 align-items-center g-0">
                                    <div class="col-12">
                                        {{-- <?php
                                if (!isset($_SESSION['login'])) {
                                    ?>
                                    <a href="user/login.php" class="link-underline link-underline-opacity-0 col-6">Đăng
                                        nhập</a>
                                    <?php
                                } else {
                                    ?>
                                    <div class="dropdown">
                                        <button class="btn noborder dropdown-toggle text-primary" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"><?php
                                            $sql = 'SELECT * FROM tbl_dangky WHERE id_khachhang = ' . $_SESSION['login'] . '';
                                            $row = mysqli_query($connect, $sql);
                                            $row_data = mysqli_fetch_array($row);
                                            
                                            echo $row_data['hoten'];
                                            ?></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.php?navigate=thongtin">Thông tin</a>
                                            </li>
                                            <li><a class="dropdown-item" href="index.php?navigate=dangxuat">Đăng xuất</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                }
                                ?> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- menu --}}
            <div class="bg-primary-subtle header-bot">
                <div class="container">
                    <nav class="navbar navbar-expand p-0">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav fs-6 nav-header">
                                    <li class="dropdown nav-item ">
                                        <button class="btn btn-dmsp dropdown-toggle hide d-flex align-items-center p-0"
                                            type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-bars me-2"></i>
                                            Danh mục sản phẩm
                                        </button>
                                        <div class="dropdown-menu p-0 header-menu-choose"
                                            aria-labelledby="dropdownMenuButton">
                                            <div class="list-group-container d-flex ">
                                                <div class="list-product-by-brain">
                                                    <div class="list-group">
                                                        <p class="list-product-content fw-bold">Điện thoại theo hãng</p>
                                                        @foreach ($hangsp as $item)
                                                            <a href="{{ route('theohang', ['hang_id' => $item->id_hangsp]) }}"
                                                                class="list-group-item list-group-item-action">
                                                                {{ $item->tenhangsp }}
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="list-product-by-price">
                                                    <div class="list-group">
                                                        <p class="list-product-content fw-bold">Chọn theo mức giá</p>
                                                        @foreach ($mucgia as $key => $item)
                                                            @if ($key == 0)
                                                                <a class="list-group-item list-group-item-action"
                                                                    href="">Dưới {{ $item->mucgia }}</a>
                                                            @elseif($key >= 1 && $key < $mucgia->count() - 1)
                                                                <a class="list-group-item list-group-item-action"
                                                                    href="">Từ {{ $item->mucgia }}
                                                                    đến{{ $mucgia[$key + 1]->mucgia }}</a>
                                                            @else
                                                                <a class="list-group-item list-group-item-action"
                                                                    href=""> Trên{{ $item->mucgia }}</a>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="list-product-by-hot">
                                                    <div class="list-group">
                                                        <p class="list-product-content fw-bold">Sản phẩm bán chạy nhất
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?navigate=gioithieu">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?navigate=tintuc">Tin tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?navigate=cauhoi">Câu hỏi thường gặp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?navigate=tuyendung">Tuyển dụng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?navigate=lienhe">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            {{-- <div class="modal-notify <?php if (isset($_SESSION['thongbao']) && $_SESSION['thongbao'] != '') {
                echo 'show';
            } ?>"> --}}
            {{-- <div class="notify">
                <div class="notify-header">
                    <p class="fs-5 fw-semibold mb-0">
                        Thông báo
                    </p>
                </div>
                <div class="content">
                    <p class="fs-6 fw-semibold mb-0 text-center notify-contents px-4">
                        {{-- <?php
                        
                        if ($_SESSION['thongbao'] == 'hethang') {
                            echo 'Không thể thêm<br>Sản phẩm này đã hết hàng !';
                            unset($_SESSION['thongbao']);
                        } elseif ($_SESSION['thongbao'] == 'dathangok') {
                            echo 'Đặt hàng thành công !';
                            unset($_SESSION['thongbao']);
                        } elseif ($_SESSION['thongbao'] == 'suadhok') {
                            echo 'Đã cập nhật đơn hàng !';
                            unset($_SESSION['thongbao']);
                        } elseif ($_SESSION['thongbao'] == 'nhandh') {
                            echo 'Nhận hàng thành công !<br> Cảm ơn bạn đã mua hàng !';
                            unset($_SESSION['thongbao']);
                        } elseif ($_SESSION['thongbao'] == 'huydh') {
                            echo 'Đã hủy đơn hàng !';
                            unset($_SESSION['thongbao']);
                        } elseif ($_SESSION['thongbao'] == 'themgiohangthanhcong') {
                            echo 'Thêm giỏ hàng thành công!';
                            unset($_SESSION['thongbao']);
                        }
                        ?></p> --}}
        </div>
        {{-- <div class="action">
            <button id="btnhiden" class="btn btn-primary w-25">OK</button>
        </div> --}}
    </div>
    </div>
    @yield('slider')


    @yield('content')
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022 - US<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        </div>
</body>

</html>
