@extends('layouts.admin')
@section('dashboard')
<div class="container">
    <h4 class="mt-3 mb-4 text-center"></h4>
    <form action="{{ route('user.postcreate')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h5 class="fw-normal mb-3 fw-bold">Thêm tài khoản người dùng</h5>
            <div class="col-md-6">
                <div class="input-group input-group-sm mb-2 row">
                    <p class="fs-6 mb-0 col-4 fw-bold">Tên tài khoản</p>
                    <input type="text" class="form-control col-8" name="tentk" required>
                </div>
                <div class="input-group input-group-sm mb-2 row">
                    <p class="fs-6 mb-0 col-4 fw-bold">Số điện thoại</p>
                    <input type="text" class="form-control col-8" name="sdt" required>
                </div>
                <div class="input-group input-group-sm mb-2 row">
                    <p class="fs-6 mb-0 col-4 fw-bold">Mật khẩu</p>
                    <input type="text" class="form-control col-8" name="mk" required>
                </div>
                <div class="input-group input-group-sm mb-2 row">
                    <p class="fs-6 mb-0 col-4 fw-bold">Địa chỉ</p>
                    <input type="text" class="form-control col-8" name="dc" required>
                </div>
                <div class="input-group input-group-sm mb-2 row">
                    <p class="fs-6 mb-0 col-4 fw-bold">Email</p>
                    <input type="email" class="form-control col-8" name="email" required>
                </div>
                <div class="d-flex ">
                    <button type="submit" class="btn btn-primary btn-lg w-40 fw-bold" name="themtk">Thêm</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="w-75 mx-auto">
    <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Danh sách tài khoản</p>
    <table class="table table-bordered border-primary caption-top text-center">
        <thead>
            <tr>
                <th scope="col" class="col-1">ID</th>
                <th scope="col" class="col-1">Tên tài khoản</th>
                <th scope="col" class="col-1">Số điện thoại</th>
                <th scope="col" class="col-1">Mật khẩu</th>
                <th scope="col" class="col-1">Địa chỉ</th>
                <th scope="col" class="col-1">email</th>
                <th scope="col" class="col-2">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ds as $u)
            <tr class="text-canter" style="height:50px">
                <td>{{$u->id_khachhang}}</td>
                <td>{{$u->hoten}}</td>
                <td>{{$u->sodienthoai}}</td>
                <td>{{$u->matkhau}}</td>
                <td>{{$u->diachi}}</td>
                <td>{{$u->email}}</td>
                <td>
                    <a class="link-offset-2 link-underline link-underline-opacity-0" 
                    href="{{route('user.edit', ['id'=>$u->id_khachhang])}}">Sửa</a> |
                    <a class="link-offset-2 link-underline link-underline-opacity-0" 
                    href="{{route('user.delete', ['id'=>$u->id_khachhang])}}">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection