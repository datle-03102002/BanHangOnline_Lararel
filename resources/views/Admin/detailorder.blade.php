@extends('layouts.admin')
@section('dashboard')
<div class="container" style="min-height: 800px;">
    <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Chi tiết đơn hàng
        </p>
    <div class="phongbi"></div>
    <div class="person-infor">
        <p class="fs-5 fw-semibold mt-4">Địa chỉ nhận hàng</p>
        <p class="fs-6 fw-semibold mb-1">Họ Tên: {{$dh->hoten}}</p>
        <p class="fs-6 fw-medium mb-1">Số điện thoại: {{$dh->sodienthoai}}</p>
        <p class="fs-6 fw-medium mb-1">Địa chỉ: {{$dh->diachi}}</p>
        <p class="fs-6 fw-medium mb-1">HTTT: {{$dh->thanhtoan}}</p>
        <p class="fs-6 fw-medium mb-1">Ngày đặt: {{$dh->ngaydat}}</p>
        <p class="fs-6 fw-medium mb-1">Ngày nhận: {{$dh->ngaynhan}}</p>
        <a class="link-offset-2 link-underline link-underline-opacity-0 d-block mt-4" 
        href="{{route('order.edit', ['code'=>$dh->code_cart])}}">
            <button class="btn btn-primary">Sửa</button>
        </a>

    </div>
    <div class="cart-product-heading row ps-1 pe-4 rounded-2 mt-4">
        <p class="col-6 text-center">Sản phẩm</p>
        <p class="col-2 text-center">Đơn giá</p>
        <p class="col-2 text-center">Số lượng</p>
        <p class="col-2 text-center">Số tiền</p>
    </div>
    <div class="cart-product-list mt-2 ">
        @foreach($ds as $item)
                @php
                    $tong += $item->gia * $item->soluong;
                @endphp
        <div class="row cart-product-item mb-2 ms-1 me-1">
            <div class="col-6 d-flex h-100">
                <div class="col-6 cart-product-name d-flex flex-column align-items-center justify-content-center fw-semibold">
                    <p class="m-0">{{$item->ten_sp}}</p>
                    <p class="m-0 fw-normal fs-6">{{$item->ram}} GB - {{$item->rom}} GB</p>
                </div>
                <div class="col-6 cart-product-image d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/uploads/'.$item->hinhanh)}}" alt="">
                </div>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                <div class="cart-product-price text-center">
                    <p class="m-0">{{number_format($item->gia, 0, ',', '.')}} đ</p>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                <div class="cart-product-quantity d-flex">

                    <p>{{$item->soluong}}</p>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                <div class="cart-product-cost">
                    <p class="m-0">
                        {{number_format($item->gia * $item->soluong, 0, ',', '.')}}
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <div class="cart-product-foot rounded-3 mb-4" style="height:60px">
        <div class="row h-100 justify-content-between">
            <div
                class="col-3 cart-product-totals d-flex align-items-center justify-content-center fw-semibold fs-5 text-primary">
                <p class="m-0">
                    Tổng tiền : {{number_format($tong, 0, ',', '.')}} đ
                </p>
            </div>
        </div>
    </div>
</div>
@endsection