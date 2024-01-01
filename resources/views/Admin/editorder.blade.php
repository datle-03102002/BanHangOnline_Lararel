@extends('layouts.admin')
@section('dashboard')
    <div class="container mb-5" style="min-height:750px">
        <form class="" action="{{ route('order.postedit', ['code' => $dh->code_cart]) }}" method="POST">
            @csrf
            <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Sửa thông tin đơn hàng</p>
            <div class="col-4">
                <div class="dathang-infor">
                    <div class="mb-3">
                        <label for="idkh" class="form-label">ID Khách hàng</label>
                        <input type="text" class="form-control" id="idkh" disabled name="id"
                            value="{{ $dh->id_khachhang }}">
                    </div>
                    <div class="mb-3">
                        <label for="hoten" class="form-label">Người nhận</label>
                        <input type="text" class="form-control" id="hoten" name="hoten"
                            value="{{ $dh->tennguoinhan }}">
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="sdt" required name="sdt"
                            value="{{ $dh->sdt }}">
                    </div>
                    <div class="mb-4">
                        <label for="dc" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="dc" required name="diachi"
                            value="{{ $dh->diachi }}">
                    </div>
                    <div class="mb-3">
                        <label for="ngaynhan" class="form-label">Ngày nhận</label>
                        <input type="date" class="form-control" id="ngaynhan" name="ngaynhan"
                            value="{{ $dh->ngaynhan }}" disabled>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="xacnhan">Xác nhận</button>
        </form>
    </div>
@endsection
