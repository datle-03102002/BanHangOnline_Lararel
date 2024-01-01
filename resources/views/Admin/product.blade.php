@extends('layouts.admin')
@section('dashboard')
    <div class="container">
        <h4 class="mt-3 mb-4 text-center">Quản lý sản phẩm</h4>
        <form action="{{ route('product.postcreate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h5 class="fw-normal mb-3 fw-bold">Thêm sản phẩm:</h5>
                <div class="col-md-6">
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Mã sản phẩm</p>
                        <input type="text" class="form-control col-8" name="masp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Tên sản phẩm</p>
                        <input type="text" class="form-control col-8" required name="tensp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Hình ảnh</p>
                        <input type="file" class="form-control col-8" required name="hinhanh">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Hãng sản phẩm</p>
                        <select name="idhangsp" id="" class="form-control col-8">
                            @foreach ($hang as $item)
                                <option value="{{ $item->id_hangsp }}">{{ $item->tenhangsp }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Giá</p>
                        <input type="number" class="form-control col-8" required name="giasp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Kích thước</p>
                        <input type="text" class="form-control col-8" required name="ktmh">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Camera</p>
                        <input type="text" class="form-control col-8" required name="camera">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Chipset</p>
                        <input type="text" class="form-control col-8" required name="chipset">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Ram</p>
                        <input type="text" class="form-control col-8" required name="ram">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Rom</p>
                        <input type="text" class="form-control col-8" required name="rom">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Pin</p>
                        <input type="text" class="form-control col-8" required name="pin">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Sim</p>
                        <input type="text" class="form-control col-8" required name="sim">
                    </div>
                    <div class="d-flex ">
                        <button type="submit" class="btn btn-primary btn-lg w-40 fw-bold" name="themsp">Thêm</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Hệ điều hành</p>
                        <input type="text" class="form-control col-8" name="hedieuhanh">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Mô tả</p>
                        <textarea class="form-control col-8" name="motasp"></textarea>
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Số lượng</p>
                        <input type="number" class="form-control col-8" name="soluongsp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Đã bán</p>
                        <input type="number" class="form-control col-8" name="dabansp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Trạng thái</p>
                        <select class="form-control col-8" name="trangthaisp">
                            <option value="1">Kích Hoạt</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4 fw-bold">Time rammat</p>
                        <input type="datetime-local" class="form-control col-8" name="timerammat">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div style="margin: 0 25px" class=" mt-4">
        <table class="table table-bordered border-primary caption-top">
            <caption class="fs-5">Danh sách sản phẩm</caption>
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã SP</th>
                    <th scope="col" class="col-2">Tên SP</th>
                    <th scope="col" class="col-2">Hình ảnh</th>
                    <th scope="col">Id Hãng SP</th>
                    <th scope="col">Giá</th>
                    <th scope="col" class="col-2">Camera</th>
                    <th scope="col">Chip set</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Rom</th>
                    <th scope="col">Pin</th>
                    <th scope="col">Sim</th>
                    <th scope="col">Hệ ĐH</th>
                    <th scope="col" class ="col-4">Mô tả</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Đã bán</th>
                    <th scope="col">Trạng Thái</th>
                    <th class="col-1"></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt = 1;
                @endphp
                @foreach ($ds as $sp)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $sp->ma_sp }}</td>
                        <td>{{ $sp->ten_sp }}</td>
                        <td><img src="{{ asset('assets/uploads/' . $sp->hinhanh) }}" width="150px"></td>
                        <td>{{ $sp->id_hangsp }}</td>
                        <td>{{ $sp->gia }}</td>
                        <td>{{ $sp->camera }}</td>
                        <td>{{ $sp->chipset }}</td>
                        <td>{{ $sp->ram }}</td>
                        <td>{{ $sp->rom }}</td>
                        <td>{{ $sp->pin }}</td>
                        <td>{{ $sp->sim }}</td>
                        <td>{{ $sp->heDH }}</td>
                        <td>{{ $sp->mota }}</td>
                        <td>{{ $sp->soluong }}</td>
                        <td>{{ $sp->daban }}</td>
                        <td>

                            @php
                                if ($sp->trangthai == 1) {
                                    echo 'Kích hoạt';
                                } else {
                                    echo 'Ẩn';
                                }
                            @endphp
                        </td>

                        <td>
                            <a class="link-offset-2 link-underline link-underline-opacity-0 me-1"
                                href="{{ route('product.delete', ['id' => $sp->id_sp]) }}">Xóa</a>|
                            <a class="link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('product.edit', ['id' => $sp->id_sp]) }}">Sửa</a>
                            {{-- {{route('product.edit', ['id'=>$sp->id_sp])}} --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="d-flex justify-content-center">{{ $ds->links() }}</div>
    </div>
@endsection
