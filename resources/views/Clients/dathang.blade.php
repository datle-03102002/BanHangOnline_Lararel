@extends('layouts.clients')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/oder.css') }}">
@endsection
@section('content')
    <div class="dathang">
        <form action="{{ route('postdathang') }}" method="POST">
            @csrf
            <div class="container mb-5">
                <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Thông tin đơn hàng</p>
                <div class="dathang-infor">
                    <div class="mb-3">
                        <label for="hoten" class="form-label">Người nhận</label>
                        <input type="text" class="form-control" id="hoten" name="hoten"
                            value="{{ $user->hoten }}">
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="sdt" required name="sdt"
                            value="{{ $user->sodienthoai }}">
                    </div>
                    <div class="mb-4">
                        <label for="dc" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="dc" required name="diachi"
                            value="{{ $user->diachi }}">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="thanhtoan">Hình thức thanh toán</label>
                        <select class="form-select" id="thanhtoan" name="httt">
                            <option selected value="Chuyển khoản">Chuyển khoản</option>
                            <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                        </select>
                    </div>
                </div>
                <div class="product-list">
                    <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Sản phẩm</p>
                    <div class="cart-product-heading row ps-1 pe-4 rounded-2">
                        <p class="col-5 text-center">Sản phẩm</p>
                        <p class="col-2 text-center">Đơn giá</p>
                        <p class="col-2 text-center">Số lượng</p>
                        <p class="col-3 text-center">Số tiền</p>
                    </div>

                    <div class="cart-product-list mt-2 ">
                        @foreach ($cart as $item)
                            <div class="row cart-product-item mb-2 ms-1 me-1">
                                <div class="col-5 d-flex h-100">
                                    <div
                                        class="col-6 cart-product-name d-flex flex-column align-items-center justify-content-center fw-semibold">
                                        <p class="m-0">{{ $item['ten'] }}</p>
                                        <p class="m-0 fw-normal fs-6">
                                            {{ $item['ram'] }}GB-{{ $item['rom'] }}GB</p>

                                    </div>
                                    <div class="col-6 cart-product-image d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/uploads/' . $item['hinhanh']) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                                    <div class="cart-product-price text-center">
                                        <p class="m-0">{{ number_format($item['gia'], 0, ',', '.') }} đ</p>
                                    </div>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                                    <div class="cart-product-quantity d-flex">
                                        <span>{{ $item['soluong'] }}</span>
                                    </div>
                                </div>
                                <div class="col-3 d-flex align-items-center justify-content-center fw-semibold">
                                    <div class="cart-product-cost">
                                        <p class="m-0">{{ number_format($item['gia'] * $item['soluong'], 0, ',', '.') }}
                                            đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="cart-product-foot rounded-3">
                        <div class="row h-100 justify-content-between">
                            <div
                                class="col-3 cart-product-totals d-flex align-items-center justify-content-center fw-semibold fs-5 text-primary">
                                <p class="m-0">
                                    Tổng tiền :
                                    <?php
                                    echo number_format($tong, 0, ',', '.');
                                    ?>
                                    đ
                                </p>
                            </div>
                            <div
                                class="col-2 cart-product-oder d-flex align-items-center justify-content-center fw-semibold">
                                <button type="submit" class="btn btn-primary" name="dathang">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
