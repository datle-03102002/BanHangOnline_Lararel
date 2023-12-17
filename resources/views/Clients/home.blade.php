@extends('layouts.clients')
@section('style')
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
@endsection
@section('slider')
    <div class="container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height:540px;">
                    <img src="{{ asset('assets/imgs/slider1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height:540px;">
                    <img src="{{ asset('assets/imgs/slider2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height:540px;">
                    <img src="{{ asset('assets/imgs/slider3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
@section('content')
    <div class="product" style="min-height: 800px" data-aos="fade-up">
        <div class="container">
            <p class="product-heading mt-0 py-3 fs-5 fw-semibold">
                {{ $tt }}

                {{ !empty($sl->soluong) ? '(' . $sl->soluong . ' sản phẩm)' : '' }}</p>
            <div class="products-list row">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="product-img position-relative">
                                <img class="card-img-top rounded-0" alt="..." style="object-fit:contain"
                                    src="{{ asset('assets/uploads/' . $item->hinhanh) }}" alt="">
                            </div>
                            <div class="card-body text-center pt-0">
                                <div class="product-info">
                                    <div class="card-content">
                                        <h5 class="card-title mb-0 w-75 mx-auto"><a
                                                href="{{ route('showpro', ['id' => $item->id_sp]) }}"
                                                class="text-dark text-decoration-none fw-semibold">{{ $item->ten_sp }}</a>
                                        </h5>
                                        <span
                                            class="text-danger h4 mb-3 d-block fw-semibold">{{ number_format($item->gia, 0, ',', '.') . 'đ' }}</span>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" data-id="{{ $item->id_sp }}"
                                            class="btn btn-primary btn-sm m-1 add-to-cart">Thêm vào giỏ hàng
                                        </a><br>
                                        <a href="{{ route('showpro', ['id' => $item->id_sp]) }}"
                                            class='btn btn-secondary btn-sm m-1'>Xem chi tiết</a>
                                    </div>
                                    <div class="product-properties text-muted small mt-3">
                                        <div class="property product-chipset">
                                            <i class="fas fa-microchip"></i> {{ $item->chipset }}
                                        </div>
                                        <div class="property product-screen">
                                            <i class="fas fa-mobile-alt"></i> {{ $item->kt_mh }} Inch
                                        </div>
                                        <div class="property product-ram">
                                            <i class="fas fa-memory"></i> {{ $item->ram }}GB
                                        </div>
                                        <div class="property product-rom">
                                            <i class="fas fa-hdd"></i> {{ $item->rom }} GB
                                        </div>
                                        <div class="property product-battery">
                                            <i class="fas fa-battery-full"></i> {{ $item->pin }}mAh
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <ul class="pagination justify-content-center">
                {{ $products->links() }}
                {{-- phân trang --}}

            </ul>

        </div>
    </div>
@endsection
