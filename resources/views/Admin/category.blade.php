@extends('layouts.admin')
@section('dashboard')
    <div class="container-xxl">
        <div class="row">
            <div class="col-4">
                <h4 class="mt-3 mb-4 text-center">Quản lý hãng sản phẩm</h4>
                <h5 class="fw-normal mb-3">Thêm hãng sản phẩm:</h5>
                <form action="{{ route('category.create') }}" method="POST">
                    @csrf
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4">Tên hãng</p>
                        <input type="text" class="form-control col-8" name="tenhangsp" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="themhangsp">Thêm</button>
                </form>
            </div>
            <div class="col-2"></div>
            <div class="col-4">
                <h4 class="mt-3 mb-4 text-center">Quản lý mức giá</h4>
                <h5 class="fw-normal mb-3">Thêm mức giá:</h5>
                <form action="{{ route('category.postprice') }}" method="post">
                    @csrf
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4">Mức giá</p>
                        <input type="text" class="form-control col-8" name="mucgia" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="themmucgia">Thêm</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-xxl mt-4">
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered border-primary caption-top">
                    <caption class="fs-5">Danh sách hãng sản phẩm</caption>
                    <thead>
                        <tr>
                            <th scope="col" class="col-3">id_hangsp</th>
                            <th scope="col" class="col-4">Tên hãng</th>
                            <th scope="col" class="col-2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $hang)
                            <tr>
                                <td> {{ $hang->id_hangsp }} </td>
                                <td> {{ $hang->tenhangsp }} </td>
                                <td>
                                    <a class="link-offset-2 link-underline link-underline-opacity-0 me-1"
                                        href="{{ route('category.delete', ['id' => $hang->id_hangsp]) }}">Xóa</a>|
                                    {{-- {{ route('category.delete', ['id' => $hang->id_hangsp]) }} --}}
                                    <a class="link-offset-2 link-underline link-underline-opacity-0"
                                        href="{{ route('category.edit', ['id' => $hang->id_hangsp]) }}">Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <table class="table table-bordered border-primary caption-top">
                    <caption class="fs-5">Danh sách mức giá</caption>
                    <thead>
                        <tr>
                            <th scope="col" class="col-3">id_mucgia</th>
                            <th scope="col" class="col-4">Mức giá</th>
                            <th scope="col" class="col-3">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsg as $item)
                            <tr>
                                <td>{{ $item->id_mucgia }}</td>
                                <td>{{ $item->mucgia }}</td>
                                <td>
                                    <a class="link-offset-2 link-underline link-underline-opacity-0 me-1"
                                        href="{{ route('category.deleteprice', ['id' => $item->id_mucgia]) }}">Xóa</a>|
                                    <a class="link-offset-2 link-underline link-underline-opacity-0"
                                        href="{{ route('category.editprice', ['id' => $item->id_mucgia]) }}">Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
