@extends('layouts.clients')
@section('content')
    <div class="product">
        <div class="container">
            <p class="product-heading mt-0 py-3 fs-5 fw-semibold">Từ khóa tìm kiếm:{{ $search }} ({{ $count }})
            </p>
            <div class="products-list row">
                @foreach ($productList as $item)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="product-img position-relative">
                                <img src="{{ asset('assets/uploads/' . $item->hinhanh) }}" class="card-img-top rounded-0"
                                    alt="..." style="object-fit: contain">
                            </div>
                            <div class="card-body text-center">
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
                                            class="btn btn-primary btn-sm m-1 add-to-cart">Thêm vào giỏ
                                            hàng</a><br>
                                        <a href="{{ route('showpro', ['id' => $item->id_sp]) }}"
                                            class='btn btn-secondary btn-sm m-1'>Xem chi tiết</a>
                                    </div>
                                    <div class="product-properties text-muted small mt-3">
                                        <div class="property product-chipset">
                                            <i class="fas fa-microchip"></i> {{ $item->chipset }}
                                        </div>
                                        <div class="property product-screen">
                                            <i class="fas fa-mobile-alt"></i>{{ $item->kt_mh }} Inch
                                        </div>
                                        <div class="property product-ram">
                                            <i class="fas fa-memory"></i>{{ $item->ram }}GB
                                        </div>
                                        <div class="property product-rom">
                                            <i class="fas fa-hdd"></i> {{ $item->rom }}GB
                                        </div>
                                        <div class="property product-battery">
                                            <i class="fas fa-battery-full"></i> {{ $item->pin }} mAh
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <ul class="pagination justify-content-center">
                {{ $productList->links() }}
            </ul>
        </div>
    </div>
@endsection
