@extends('admin.main')

@section('content')
    <div class="card-body">
        <table class="table table-sm table-hover table-bordered text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">HÌNH ẢNH</th>
                <th scope="col">TÊN MÓN</th>
                <th scope="col">LOẠI</th>
                <th scope="col">GIÁ TIỀN</th>
                <th scope="col">TRẠNG THÁI</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <th class="align-middle" scope="row">{{ $product->product_id }}</th>
                    <td class="align-middle"><img src="{{ asset($product->image_path) }}" alt="" height="40"></td>
                    <td class="align-middle">{{ $product->product_name }}</td>
                    <td class="align-middle">{{ $product->category->category_name }}</td>
                    <td class="align-middle">{{ $product->price }} đ</td>
                    <td class="align-middle">{!! $product->chooseStatus() !!}</td>
                    <td class="align-middle">
                        <form action="/admin/products/edit/{{ $product->product_id}}" method="GET">
                            @csrf
                            <button class="btn btn-info">
                                <i class="fas fa-solid fa-pen"></i>
                            </button>
                        </form>
                        <form action="/admin/products/destroy/{{ $product->product_id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
