@extends('layouts.admin')
@section('dashboard')
    <div class="container">
    <h4 class="mt-3 mb-4 text-center">Quản lý sản phẩm</h4>
    <form action="{{ route('product.postedit', ['id'=>$sp->id_sp])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h5 class="fw-normal mb-3 fw-bold" >Sửa sản phẩm:</h5>
                <div class="col-md-6">                           
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Mã sản phẩm</p>
                        <input type="text" class="form-control col-8" value="{{$sp->ma_sp}}" name="masp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Tên sản phẩm</p>
                        <input type="text" class="form-control col-8" value="{{$sp->ten_sp}}" name="tensp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Hình ảnh</p>
                            <div class="col-8">
                                <input type="file" class="form-control" name="hinhanh">
                                    <div class="border border-secondary p-2 mt-2 d-flex justify-content-center">
                                        <img src="{{asset('assets/uploads/'.$sp->hinhanh)}}" width="150px">
                                    </div>
                            </div>
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">ID hãng sản phẩm</p>
                        <input type="number" class="form-control col-8" value="{{$sp->id_hangsp}}" name="idhangsp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Giá</p>
                        <input type="number" class="form-control col-8" value="{{$sp->gia}}" name="giasp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Kích thước</p>
                        <input type="text" class="form-control col-8" value="{{$sp->kt_mh}}" name="ktmh">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Camera</p>
                        <input type="text" class="form-control col-8" value="{{$sp->camera}}" name="camera">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Chipset</p>
                        <input type="text" class="form-control col-8" value="{{$sp->chipset}}" name="chipset">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Ram</p>
                        <input type="text" class="form-control col-8" value="{{$sp->ram}}" name="ram">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Rom</p>
                        <input type="text" class="form-control col-8" value="{{$sp->rom}}" name="rom">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Pin</p>
                        <input type="text" class="form-control col-8" value="{{$sp->pin}}" name="pin">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Sim</p>
                        <input type="text" class="form-control col-8" value="{{$sp->sim}}"name="sim">
                    </div>
                    <div class="d-flex ">
                        <button type="submit" class="btn btn-primary btn-lg w-40 fw-bold" name="suasanpham">Sửa</button>
                    </div>
                </div>
                <div class="col-md-6">                   
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Hệ điều hành</p>
                        <input type="text" class="form-control col-8" value="{{$sp->heDH}}" name="hedieuhanh">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Mô tả</p>
                        <textarea class="form-control col-8"  name="motasp">{{$sp->mota}}</textarea>
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Số lượng</p>
                        <input type="number" class="form-control col-8" value="{{$sp->soluong}}" name="soluongsp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Đã bán</p>
                        <input type="number" class="form-control col-8" value="{{$sp->daban}}" name="dabansp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Trạng thái</p>
                        <select class="form-control col-8" name="trangthaisp">
                                @if($sp->trangthai == 1){
                                    <option value="1" selected>Kích Hoạt</option>
                                    <option value="0">Ẩn</option>
                                }
                                @else {
                                    <option value="1" >Kích Hoạt</option>
                                    <option value="0" selected>Ẩn</option>
                                }
                                @endif
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Time rammat</p>
                        <input type="date" class="form-control col-8" value="{{$sp->time_rammat}}" name="timerammat">
                    </div>              
                </div>
        </div>
    </form>
</div>
@endsection