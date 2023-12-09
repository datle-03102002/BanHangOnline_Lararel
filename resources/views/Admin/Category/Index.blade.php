{{-- @extends('layouts.admin')
@section('content')
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoryList as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->menu_id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', ['id' => $item->menu_id]) }}">
                            <span>Sửa</span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection --}}
