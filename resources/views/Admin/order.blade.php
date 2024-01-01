@extends('layouts.admin')
@section('dashboard')
    <div class="w-75 mx-auto">
        <p class="cart-heading mt-0 py-3 fs-5 fw-semibold">Danh sách đơn hàng</p>
        <table class="table table-bordered border-primary caption-top text-center">
            <thead>
                <tr>
                    <th scope="col" class="col-1">STT</th>
                    <th scope="col" class="col-1">Mã DH</th>
                    <th scope="col" class="col-1">Người nhận</th>
                    <th scope="col" class="col-1">Địa chỉ</th>
                    <th scope="col" class="col-1">SDT</th>
                    <th scope="col" class="col-1">HTTT</th>
                    <th scope="col" class="col-1">Ngày đặt</th>
                    <th scope="col" class="col-1">Ngày nhận</th>
                    <th scope="col" class="col-1">Trạng thái</th>
                    <th scope="col" class="col-2">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt = 1;
                @endphp
                @foreach ($ds as $h)
                    <tr class="text-canter" style="height:100px">
                        <td>{{ $stt++ }}</td>
                        <td>
                            <span>{{ $h->code_cart }}</span>
                        </td>
                        <td>{{ $h->tennguoinhan }}</td>
                        <td>{{ $h->dc }}</td>
                        <td>{{ $h->sdt }}</td>
                        <td>{{ $h->thanhtoan }}</td>
                        <td>{{ $h->ngaydat }}</td>
                        <td>{{ $h->ngaynhan }}</td>
                        <td class="fw-semibold">

                            @if ($h->trangthai == 1)
                                <p class="text-danger">Chờ xác nhận</p>
                                <a class="link-offset-2 link-underline link-underline-opacity-0"
                                    href="{{ route('order.xacnhandonhang', ['code' => $h->code_cart]) }}">
                                    (Giao hàng)
                                </a>
                            @elseif ($h->trangthai == 2)
                                <span class="text-primary">Đang giao</span>
                            @else
                                <span class="text-success">Đã nhận</span>
                            @endif

                        </td>
                        <td>
                            <a class="link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('order.detail', ['code' => $h->code_cart]) }}">Xem chi tiết</a> |
                            <a class="link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('order.edit', ['code' => $h->code_cart]) }}">Sửa</a>|
                            <a class="link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('order.delete', ['code' => $h->code_cart]) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
