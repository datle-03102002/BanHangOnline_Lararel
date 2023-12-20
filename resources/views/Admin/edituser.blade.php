@extends('layouts.admin')
@section('dashboard')
<div class="container mb-5" style="min-height:750px">
    <form class="" action="{{route('user.postedit',['id'=>$u->id_khachhang])}}" method="POST">
        @csrf
        <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Sửa thông tin tai khoản</p>
        <div class="col-4">
            <div class="dathang-infor">
                <div class="mb-3">
                    <label for="idkh" class="form-label">ID</label>
                    <input type="text" class="form-control" id="hoten" disabled name="id" value="{{$u->id_khachhang}}">
                </div>
                <div class="mb-3">
                    <label for="hoten" class="form-label">Tên tài khoản</label>
                    <input type="text" class="form-control" id="hoten"  name="tentk" value="{{$u->hoten}}">
                </div>
                <div class="mb-3">
                    <label for="sdt" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="sdt" required name="sdt" value="{{$u->sodienthoai}}">
                </div>
                <div class="mb-4">
                    <label for="mk" class="form-label">Mật khẩu</label>
                    <input type="text" class="form-control" id="mk" required name="matkhau" value="{{$u->matkhau}}">
                </div>
                <div class="mb-3">
                    <label for="diachi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" required name="diachi" value="{{$u->diachi}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$u->email}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="xacnhansua">Xác nhận</button>
    </form>
</div>
@endsection