@extends('layouts.clients')
	<!--Slider-->
  @section('content')
	<div id="carouselExampleCaptions" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="container-fluid slide-1">
					<div class="row">
						<div class="col-6 offset-3">
							<div class="row align-items-center">
								<div class="col-6 align-items-center">
									<div class="text-dark text-center">
										<h1>Cơm trộn và càng cua</h1>
										<p class="text-danger">80.000 VNĐ / xuất</p>
										<button class="btn bg-success text-light">Mua ngay</button>
									</div>
								</div>
								<div class="col-6">
									<img src="{{asset('assets/imgs/do-an-1.png')}}" class="d-block w-100" alt="...">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="container-fluid slide-2">
					<div class="row">
						<div class="col-6 offset-3">
							<div class="row align-items-center">
								<div class="col-6 align-items-center">
									<div class="text-dark text-center">
										<h1>Cơm cuộn kèm mực nướng</h1>
										<p class="text-danger">280.000 VNĐ / xuất</p>
										<button class="btn bg-succss text-light">Mua ngay</button>
									</div>
								</div>
								<div class="col-6">
									<img src="{{asset('assets/imgs/do-an-2.png')}}" class="d-block w-100" alt="...">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="container-fluid slide-3">
					<div class="row">
						<div class="col-6 offset-3">
							<div class="row align-items-center">
								<div class="col-6 align-items-center">
									<div class="text-dark text-center">
										<h1>Cơm trộn</h1>
										<p class="text-danger">180.000 VNĐ / xuất</p>
										<button class="btn bg-success text-light">Mua ngay</button>
									</div>
								</div>
								<div class="col-6">
									<img src="{{asset('assets/imgs/do-an-3.png')}}" class="d-block w-100" alt="...">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!--About us-->
	<section id="about" class="about">
      <div class="container-xl mb-3" data-aos="fade-up">

        <div class="section-header text-center mt-3">
          <h2>Giới thiệu</h2>
          <p>Hãy đến <span>với chúng tôi</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url();" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Đặt bàn</h4>
              <p>0867687695</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Chào mừng bạn đã ghé nhà hàng chúng tôi, chúng tôi là nhà hàng cao cấp hàng đầu Hà Nội, đến với chúng tôi các bạn sẽ cảm nhận được:
              </p>
              <ul>
                <li><i class="bi fa-solid fa-check-double"></i> Không gian vô cùng rộng dãi và sang trọng.</li>
                <li><i class="bi fa-solid fa-check-double"></i> Dịch vụ tiếp đón khách hàng chất lượng hàng đầu.</li>
                <li><i class="bi fa-solid fa-check-double"></i> Cung cấp cho khách hàng những món ăn ngon, chất lượng đến từ đầu bếp hàng đầu của nhà hàng.</li>
                <li><i class="bi fa-solid fa-check-double"></i> Chúng tôi cam kết nhưng nguyên liệu đều là đồ tươi sống.</li>
              </ul>
              <p>
				
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('assets/imgs/about-2.jpg')}}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

	<!--Specials-->
	
	<!---->
	<!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <form action="main.php" method="post" id="display_food">
          <div class="container-xxl" data-aos="fade-up">

            <div class="section-header text-center mt-5">
              <h2 class=" fw-bold">Thực đơn</h2>
              
            </div>
    
            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
    
              <li class="nav-item" >
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                  <h4>Tất cả</h4>
                </a>
              </li><!-- End tab nav item -->
    
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                  <h4>Nước uống</h4>
                </a><!-- End tab nav item -->
    
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                  <h4>Hoa quả</h4>
                </a>
              </li><!-- End tab nav item -->
    
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                  <h4>Đồ ăn</h4>
                </a>
              </li><!-- End tab nav item -->
    
            </ul>
    
            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
    
              <div class="tab-pane fade active show" id="menu-starters">
    
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Tất cả</h3>
                </div>
                <div class="row gy-5" id="allProduct">
                    @foreach ($foodList as $food)
                   
                        <div class="col-lg-3 menu-item">
                          <a href="" class="glightbox"><img src="{{asset("assets".$food->images)}}" class="menu-img img-fluid" alt=""></a>
                          <h4 >{{$food->name}}</h4>
                          <form action="fooddetail.php" method="post" id="food_display_">
                            <input type="hidden" name="id_food" id="id_food" value="" />
                          </form>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price text-danger">
                            {{$food->price}} VNĐ
                          </p>
                        </div>
                    @endforeach
                </div>
                
              </div><!-- End Starter Menu Content -->
    
              <div class="tab-pane fade" id="menu-breakfast">
    
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Nước uống</h3>
                </div>
    
                <div class="row gy-5">
                @foreach ($foodList as $food)
                   
                        @if ($food->menu_id == "menu01")
                            <div class="col-lg-3 menu-item">
                          <a href="" class="glightbox"><img src="{{asset("assets".$food->images)}}" class="menu-img img-fluid" alt=""></a>
                          <h4 >{{$food->name}}</h4>
                          <form action="fooddetail.php" method="post" id="food_display_">
                            <input type="hidden" name="id_food" id="id_food" value="" />
                          </form>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price text-danger">
                            {{$food->price}} VNĐ
                          </p>
                        </div>
                        @endif
                    @endforeach
                </div>
              </div><!-- End Breakfast Menu Content -->
    
              <div class="tab-pane fade" id="menu-lunch">
    
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Hoa quả</h3>
                </div>
    
                <div class="row gy-5">
    
                @foreach ($foodList as $food)
                   
                        @if ($food->menu_id == "menu01")
                            <div class="col-lg-3 menu-item">
                          <a href="" class="glightbox"><img src="{{asset("assets".$food->images)}}" class="menu-img img-fluid" alt=""></a>
                          <h4 >{{$food->name}}</h4>
                          <form action="fooddetail.php" method="post" id="food_display_">
                            <input type="hidden" name="id_food" id="id_food" value="" />
                          </form>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price text-danger">
                            {{$food->price}} VNĐ
                          </p>
                        </div>
                        @endif
                    @endforeach
    
                </div>
              </div><!-- End Lunch Menu Content -->
    
              <div class="tab-pane fade" id="menu-dinner">
    
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Đồ ăn</h3>
                </div>
    
                <div class="row gy-5">
    
                @foreach ($foodList as $food)
                   
                        @if ($food->menu_id == "menu03")
                            <div class="col-lg-3 menu-item">
                          <a href="" class="glightbox"><img src="{{asset("assets".$food->images)}}" class="menu-img img-fluid" alt=""></a>
                          <h4 >{{$food->name}}</h4>
                          <form action="fooddetail.php" method="post" id="food_display_">
                            <input type="hidden" name="id_food" id="id_food" value="" />
                          </form>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price text-danger">
                            {{$food->price}} VNĐ
                          </p>
                        </div>
                        @endif
                    @endforeach
                </div>
              </div><!-- End Dinner Menu Content -->
    
            </div>
    
          </div>

      </form>
    </section><!-- End Menu Section -->
 

	 <!-- ======= Book A Table Section ======= -->
   <section id="book-a-table" class="book-a-table mt-3">
      <div class="container-xl " data-aos="fade-up">

        <div class="section-header text-center">
          <h2 class="fw-bold">Đặt bàn</h2>
          <p>Đặt <span>niềm tin của bạn</span> với chúng tôi</p>
        </div>

        <div class="row g-0 bg-dark-subtle ">

          <div class="col-lg-4 reservation-img" style="background-image: url();" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg mt-5 mb-5">
            <form action="main.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4 me-2 ms-2">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Họ và tên" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Ngày đặt" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Thời gian" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="Số lượng người" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
                <div class="form-group mt-3 col-lg-12">
                  <textarea class="form-control" name="message" rows="5" placeholder="Tin nhắn"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-danger mt-3">Đặt bàn</button></div>
              </div>
              
              
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->
	
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h2 class="fw-bold">Contact</h2>
              <p>Need Help? <span>Contact Us</span></p>
            </div>

            <div class="mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4736632130416!2d105.73253187500107!3d21.05373598692086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1701426430126!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
              
                  <i class="icon fa-solid fa-map flex-shrink-0 "></i>
                  <div>
                    <h3>Our Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                  <i class="icon fa-solid fa-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                  </div>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                  <i class="icon fa-solid fa-square-phone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                  <i class="icon fa-solid fa-square-share-nodes flex-shrink-0"></i>
                  <div>
                    <h3>Opening Hours</h3>
                    <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                      <strong>Sunday:</strong> Closed
                    </div>
                  </div>
                </div>
              </div><!-- End Info Item -->

            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
              <div class="row">
                <div class="col-xl-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-xl-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form><!--End Contact Form -->

          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      
@endsection
