@extends('layouts.clients')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/personal.css') }}">
@endsection
@section('content')
    <form action="{{ route('postUpdate') }}" method="POST">
        @csrf
        <div class="account ">
            <div class="image">
                <img src="{{ asset('assets/imgs/logn.webp') }}" alt="">
            </div>
            <div class="inforr">
                <div class="infor-title">
                    <p>Hồ sơ của tôi</p>
                </div>
                <div class="information">
                    <div class="thongtinchitiet">
                        <label for="">Họ và tên: </label>
                        <input class="form-control-lg  " name="hoten" value="{{ $user->hoten }}" />
                    </div>
                    <div class="thongtinchitiet">
                        <label for="">Email: </label>
                        <input class="form-control-lg  " name="email" value="{{ $user->email }}" />
                    </div>
                    <div class="thongtinchitiet">
                        <label for="">Số điện thoại: </label>
                        <input class="form-control-lg  " name="sdt" value="{{ $user->sodienthoai }}" />
                    </div>
                    <div class="thongtinchitiet">
                        <label for="">Địa chỉ: </label>
                        <input class="form-control-lg  " name="diachi" value="{{ $user->diachi }}" />
                    </div>
                </div>
                <div class="update">
                    <button type="submit" name="update">Lưu thông tin</button>
                </div>
            </div>
        </div>
    </form>
@endsection
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
