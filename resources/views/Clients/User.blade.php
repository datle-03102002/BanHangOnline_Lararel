@extends('layouts.clients')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/personal.css') }}">
@endsection
@section('content')
    <div class="account ">
        <div class="image">
            <img src="{{ asset('assets/imgs/logn.webp') }}" alt="">
        </div>
        <div class="inforr d-flex justify-content-center flex-column align-items-center ">
            <div class="infor-title d-flex justify-content-center ">
                <p>Hồ sơ của tôi</p>
            </div>
            <div class="information">
                <div class="thongtinchitiet">
                    <label class="text-start " for="">Họ và tên: </label>
                    <span>{{ $user->hoten }}</span>
                </div>
                <div class="thongtinchitiet">
                    <label class="text-start " for="">Email: </label>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="thongtinchitiet">
                    <label class="text-start " for="">Số điện thoại: </label>
                    <span>{{ $user->sodienthoai }}</span>
                </div>
                <div class="thongtinchitiet">
                    <label class="text-start " for="">Địa chỉ: </label>
                    <span>{{ $user->diachi }}</span>
                </div>
            </div>
            <div class="update">
                <button>
                    <a href="{{ route('updateTT') }}" name="update">Cập nhật thông tin</a>
                </button>
            </div>
        </div>
    </div>
@endsection
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
