@extends('layouts.admin')
@section('dashboard')
<div class="container-xxl">
    <h4 class="mt-3 mb-4 text-center">Quản lý mức giá</h4>
    <form action="{{ route('category.posteditprice', ['id'=>$gia->id_mucgia])}}" method="post">
        @csrf
        <div class="row">
            <div class="col-4">
                <h5 class="fw-normal mb-3">Sửa mức giá:</h5>
                <form action="./modules/quanlydanhmucsp/xuly.php" method="post">
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4">Mức giá</p>
                        <input type="text" class="form-control col-8" name="mucgia"
                            value="{{$gia->mucgia}}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="suamucgia">Sửa</button>
                    {{-- <button type="submit" class="btn btn-primary btn-sm ms-2" name="huysua">Hủy bỏ</button> --}}
                </form>
            </div>
        </div>
    </form>
</div>
@endsection