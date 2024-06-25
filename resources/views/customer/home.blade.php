@extends('customer.main')

@section('content')
    <div class="row text-center">
        <img
            src="https://www.myclubmarriott.com/assets/uploads/property/offer_1696222085_776142.jpg"
            alt=""
        />

        <hr/>

        <h3>Ưu đãi đặc biệt</h3>
        <div class="row">
            @foreach ($products->take(4) as $product)
                <div class="card btn" onclick="window.location.href='/menus/{{ $product->category_id }}/{{ $product->product_id }}'">
                    <img
                        src="{{ asset($product->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">{{ $product->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="#" class="btn bg-light">Xem thêm</a>
        </div>

        <hr/>

        <h3>Best seller</h3>
        <div class="row">
            <div class="card">
                <img
                    src="images/KFC Menu For Sharing.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Taco Gà</h5>
                    <p class="card-text">30.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="images/Frittenwerk Friedrichstraße - Lieferservice.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Khoai tây chiên</h5>
                    <p class="card-text">20.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="images/McDonald's Mozzarella Sticks with El Maco Sauce.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Phô mai que</h5>
                    <p class="card-text">45.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="images/Special mushroom burger stock image_ Image of spicy, crunchy - 20005725.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Burger Nấm</h5>
                    <p class="card-text">35.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="#" class="btn bg-light">Xem thêm</a>
        </div>
    </div>
@endsection
