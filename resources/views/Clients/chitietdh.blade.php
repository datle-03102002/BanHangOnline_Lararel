@extends('layouts.clients')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/oder.css') }}">
@endsection
@section('content')
    <div class="container" style="min-height: 800px;">
        <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Chi tiết đơn hàng
            <span class='text-primary'>{{ $code_cart }}</span>
        </p>
        <div class="phongbi"></div>
        <div class="person-infor">
            <p class="fs-5 fw-semibold mt-4">Địa chỉ nhận hàng</p>
            <p class="fs-6 fw-semibold mb-1">Người nhận: {{ $dataCart->hoten }}</p>
            <p class="fs-6 fw-medium mb-1">SDT: {{ $dataCart->sdt }}</p>
            <p class="fs-6 fw-medium mb-1">Địa chỉ: {{ $dataCart->dc }}</p>
            <p class="fs-6 fw-medium mb-1">HTTT: {{ $dataCart->thanhtoan }}</p>
            <p class="fs-6 fw-medium mb-1">Ngày đặt: {{ date('d-m-Y', strtotime($dataCart->ngaydat)) }}</p>
            <p class="fs-6 fw-medium mb-1">Ngày nhận:
                @if ($dataCart->ngaynhan != '')
                    {{ date('d-m-Y', strtotime($dataCart->ngaynhan)) }}
                @else
                    --/--/----
                @endif
            </p>
            <p class="fs-6 fw-medium mb-1">Trạng thái đơn hàng:

                @if ($dataCart->trangthai == 1)
                    <span class='text-danger'>Chờ xác nhận</span>
                @elseif ($dataCart->trangthai == 2)
                    <span class='text-primary'>Đang giao</span>
                @else
                    <span class='text-success'>Đã nhận</span>
                @endif
            </p>

            @if ($dataCart->trangthai != 3)
                <p class="fw-semibold mt-2 mb-1 text-danger" style="font-size: 14px;">Lưu ý: Đối với đơn hàng đang giao
                    không
                    thể sửa thông tin nhận được, vui lòng báo lại với Shop để sửa thông tin này</p>
            @endif
            @if ($dataCart->trangthai == 1)
                <a class="link-offset-2 link-underline link-underline-opacity-0 d-block mt-3"
                    href="{{ route('suadonhang', ['id' => $code_cart]) }}">
                    <button type="button" class="btn btn-primary">Sửa thông tin nhận hàng</button>
                </a>
            @endif

            @if ($dataCart->trangthai != 3)
                <a class="link-offset-2 link-underline link-underline-opacity-0 d-block mt-3"
                    href="{{ route('huydonhang', ['id' => $code_cart]) }}">
                    <button type="button" class="btn btn-danger">Hủy đơn hàng</button>
                </a>
            @endif
            @if ($dataCart->trangthai == 2)
                <a class="link-offset-2 link-underline link-underline-opacity-0 d-block mt-3"
                    href="{{ route('danhandonhang', ['id' => $code_cart]) }}">
                    <button type="button" class="btn btn-success">Đã nhận được hàng</button>
                </a>
            @endif
        </div>
        <div class="cart-product-heading row ps-1 pe-4 rounded-2 mt-4">
            <p class="col-6 text-center">Sản phẩm</p>
            <p class="col-2 text-center">Đơn giá</p>
            <p class="col-2 text-center">Số lượng</p>
            <p class="col-2 text-center">Số tiền</p>
        </div>
        <div class="cart-product-list mt-2 ">
            @foreach ($dataSP as $item)
                <div class="row cart-product-item mb-2 ms-1 me-1">
                    <div class="col-6 d-flex h-100">
                        <div
                            class="col-6 cart-product-name d-flex flex-column align-items-center justify-content-center fw-semibold">
                            <p class="m-0">{{ $item->ten_sp }}</p>
                            <p class="m-0 fw-normal fs-6">{{ $item->ram }}GB-{{ $item->rom }}GB</p>
                        </div>
                        <div class="col-6 cart-product-image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/uploads/' . $item->hinhanh) }}" alt="">
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                        <div class="cart-product-price text-center">
                            <p class="m-0">{{ number_format($item->gia, 0, ',', '.') }} đ</p>
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                        <div class="cart-product-quantity d-flex">

                            <p>{{ $item->sl }}</p>
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center fw-semibold">
                        <div class="cart-product-cost">
                            <p class="m-0">{{ number_format($item->gia * $item->sl, 0, ',', '.') }} đ</p>
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
                        Tổng tiền :
                        {{ number_format($tong, 0, ',', '.') }}
                        đ
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
