@extends('user.main')

@section('content')
    <div class="row text-center">
        <div class="row">
            <div
                class="col"
                style="display: flex; justify-content: center;"
            >
                <div
                    class="card"
                    style="
                width: 350px;
                height: 350px;
                padding: 15px;
                border-radius: 15px;
              "
                >
                    <img
                        src="image/Korean Fried Chicken with Soy-Garlic Glaze.jpg"
                        class="card-img-top"
                        style="width: 100%; height: 100%;"
                    />
                </div>
            </div>
            <div class="col" style="text-align: left">
                <h2 style="color: #d00000; font-weight: bold">Đùi gà sốt</h2>
                <hr style="width: 70%" />
                <h4
                    style="
                color: #ffba08;
                font-weight: bold;
                font-family: 'Coiny', sans-serif;
              "
                >
                    65.000 đ
                </h4>
                <div class="container" style="display: flex; padding: 0">
                    <h5
                        style="color: #d00000; font-weight: bold; padding: 0; margin: 0"
                    >
                        Số lượng:
                    </h5>
                    <form action="" style="padding-left: 20px">
                        <button
                            class="btn"
                            style="
                    width: 30px;
                    height: 30px;
                    color: white;
                    background-color: #d00000;
                    border-radius: 10px;
                  "
                        >
                            -
                        </button>
                        <input
                            type="text"
                            name="number"
                            id="textnumber"
                            placeholder="1"
                            aria-disabled="true"
                            aria-readonly="true"
                            style="width: 20px;"
                        />
                        <button
                            class="btn"
                            style="
                    width: 30px;
                    height: 30px;
                    color: white;
                    background-color: #d00000;
                    border-radius: 10px;
                  "
                        >
                            +
                        </button>
                    </form>
                </div>
                <div class="container" style="padding: 0; margin-top: 20px;">
                    <i class="fa-regular fa-heart" style="font-size: 30px; padding-right: 20px; color: #d00000;"></i>
                    <button class="btn" style="width: 200px; background-color: #d00000; color: white; border-radius: 20px;">
                        Thêm vào giỏ hàng
                    </button>
                </div>
            </div>
        </div>

        <hr style="width: 75%; height: 3px" />

        <h3>Các món ăn tương tự</h3>
        <div class="row">
            <div class="card">
                <img src="image/chicken wings.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Cánh gà rán</h5>
                    <p class="card-text">50.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="image/14 Foods You Should Never Freeze.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Ức gà rán</h5>
                    <p class="card-text">75.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="image/Korean Fried Chicken with Soy-Garlic Glaze.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Đùi gà sốt</h5>
                    <p class="card-text">65.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="image/Chicken Selects® - Chicken Breast Meat.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Đùi gà rán</h5>
                    <p class="card-text">30.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <img src="image/chicken wings.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Cánh gà rán</h5>
                    <p class="card-text">50.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="image/14 Foods You Should Never Freeze.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Ức gà rán</h5>
                    <p class="card-text">75.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="image/Korean Fried Chicken with Soy-Garlic Glaze.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Đùi gà sốt</h5>
                    <p class="card-text">65.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
            <div class="card">
                <img
                    src="image/Chicken Selects® - Chicken Breast Meat.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Đùi gà rán</h5>
                    <p class="card-text">30.000 đ</p>
                    <a href="#" class="btn">Thêm</a>
                </div>
            </div>
        </div>
    </div>
@endsection
