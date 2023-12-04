
<!Doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cửa hàng bán đồ ăn</title>
  <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
	
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
	<script src="{{asset('assets/js/index.js')}}"></script>
  <?php
    session_start();
    // include("main.php");
  ?>
  </head>
  <body>
	
	<!--Header-->
		<header class="pt-2">
			<div class="container-fluid">
				<div class="container-xl">
					<div class="row header d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
						<div class="col-4 header__logo"><img src="{{asset('assets/img/LOGO.png')}}"></div>
              <div class="col-4 header__search align-middle">
                <form role="search" action="search" method="GET" class="input-group px-2 pe-lg-0" name="frmSearch" id="frmSearch">
                  <input class="form-control " type="search" name="txtKeyword" id="txtKeyword">
                  <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
              </div>
						<div class="col-4 text-end ">
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-end d-flex flex-wrap align-items-center  justify-content-lg-end">
                <a href="cart-page.php" class=""><i class="fa-solid fa-cart-shopping text-danger fs-0"></i></a>
                </div>
                <div class="col-lg-4">
                    <div class="dropdown">   
                  </div>
                </div>
              </div>
					</div>
				</div>
			</div>
			
		</header>
		
	<!--Menu-->
	
	<nav class="navbar navbar-expand-lg navbar-light text-light" aria-label="">
		<div class="container-xl">

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mobile">
				<ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
					<li class="nav-item px-2">
						<a class="nav-link active" href="index.php">Trang chủ
						<div class="line"></div>
						</a>
						
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="#about">Giới thiệu
						<div class="line"></div>
						</a>
						
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="#carouselExampleCaptions">Món ngon
						<div class="line"></div>
						</a>
						
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="#menu">Thực đơn
						<div class="line"></div>
						</a>
						
					</li>
					<li class="nav-item px-2">
						<a class="nav-link " href="#book-a-table" >Đặt bàn
						<div class="line"></div>
						</a>
						
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="#">Có gì hót
						<div class="line"></div>
						<a>
						
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="#footer">Cửa hàng
						<div class="line"></div>
						</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="#contact">Liên hệ
						<div class="line"></div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
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
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
	<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	
	<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>