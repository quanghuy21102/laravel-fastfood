@extends('customer.main')

@section('content')
    <div class="row text-center py-5">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card rounded-3 p-0" style="width: 350px; height: 350px">
                    <img src="{{ asset($product->image_path) }}" class="card-img-top w-100 h-100"/>
                </div>
            </div>
            <div class="col-md-6" style="text-align: left">
                <h2>{{ $product->product_name }}</h2>
                <hr class="w-75"/>
                <h4>{{ $product->price }} đ</h4>
                <div class="container p-0 d-flex">
                    <h5 class="pe-2">Số lượng:</h5>
                    <form action="" method="post">
                        <button class="btn btn-count">-</button>
                        <input
                            type="text"
                            name="number"
                            id="textnumber"
                            placeholder="1"
                            aria-disabled="true"
                            aria-readonly="true"
                            style="width: 30px"
                        />
                        <button class="btn btn-count">+</button>
                    </form>
                </div>
                <div class="container p-0 mt-4">
                    <i class="fa-regular fa-heart fs-5 pe-3" style="color: #d00000;"></i>
                    <button class="btn rounded-pill" style="background-color: #d00000; color: white;">
                        Thêm vào giỏ hàng
                    </button>
                </div>
            </div>
        </div>

        <hr style="width: 75%; height: 3px"/>

        <h3>Các món tương tự</h3>
        <div class="row">
            @foreach($products as $key => $product)
                <div class="card btn" onclick="window.location.href='/menus/{{ $product->category_id }}/{{ $product->product_id }}'">
                    <img src="{{ asset($product->image_path) }}" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $product->product_name }}</h5>
                        <p class="card-text">{{ $product->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
