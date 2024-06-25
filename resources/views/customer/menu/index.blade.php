@extends('customer.main')

@section('content')
    <div class="row text-center">
        <div class="row">
            <div class="card btn btn-primary" onclick="window.scrollTo({
            top: document.getElementById('combo').offsetTop,
            behavior: 'smooth'})">
                <img
                        src="storage/images/combox.png"
                        class="card-img card-img-top"

                />
                <div class="card-body">
                    <p class="card-title">Combo</p>
                </div>
            </div>
            <div class="card btn btn-primary" onclick="window.scrollTo({
            top: document.getElementById('chicken').offsetTop,
            behavior: 'smooth'})">
                <img
                        src="storage/images/chicken.png"
                        class="card-img card-img-top"

                />
                <div class="card-body">
                    <p class="card-title">Gà rán</p>
                </div>
            </div>
            <div class="card btn btn-primary" onclick="window.scrollTo({
            top: document.getElementById('rice-noodle').offsetTop,
            behavior: 'smooth'})">
                <div class="row p-0">
                    <img
                            src="storage/images/spaghetti.png"
                            class="card-img card-img-top"

                    />
                    <img
                            src="storage/images/rice.png"
                            class="card-img card-img-top"

                    />
                </div>

                <div class="card-body">
                    <p class="card-title">Mỳ Ý - Cơm</p>
                </div>
            </div>
            <div class="card btn btn-primary" onclick="window.scrollTo({
            top: document.getElementById('hamburger').offsetTop,
            behavior: 'smooth'})">
                <img
                        src="storage/images/burger.png"
                        class="card-img card-img-top"

                />
                <div class="card-body">
                    <p class="card-title">Hamburger</p>
                </div>
            </div>
            <div class="card btn btn-primary" onclick="window.scrollTo({
            top: document.getElementById('ice-cream').offsetTop,
            behavior: 'smooth'})">
                <img
                        src="storage/images/ice-cream.png"
                        class="card-img card-img-top"

                />
                <div class="card-body">
                    <p class="card-title">Kem</p>
                </div>
            </div>
            <div class="card btn btn-primary" onclick="window.scrollTo({
            top: document.getElementById('drink').offsetTop,
            behavior: 'smooth'})">
                <img
                        src="storage/images/drink.png"
                        class="card-img card-img-top"

                />
                <div class="card-body">
                    <p class="card-title">Thức uống</p>
                </div>
            </div>
            <div class="card btn btn-primary" onclick="window.scrollTo({
            top: document.getElementById('any-food').offsetTop,
            behavior: 'smooth'})">
                <img
                        src="storage/images/anyfood.png"
                        class="card-img card-img-top"

                />
                <div class="card-body">
                    <p class="card-title">Món ăn kèm</p>
                </div>
            </div>
        </div>

        <hr/>

        <h3 id="combo">Combo</h3>
        <div class="row" id="combo">
            @foreach ($combos as $key => $combo)
                <div class="card btn" onclick="window.location.href='/menus/{{ $combo->category_id }}/{{ $combo->product_id }}'">
                    <img
                            src="{{ asset($combo->image_path) }}"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $combo->product_name }}</h5>
                        <p class="card-text">{{ $combo->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menus/{{ $combo->category_id }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr/>

        <h3 id="chicken">Gà rán</h3>
        <div class="row">
            @foreach ($chickens as $key => $chicken)
                <div class="card btn" onclick="window.location.href='/menus/{{ $chicken->category_id }}/{{ $chicken->product_id }}'">
                    <img
                            src="{{ asset($chicken->image_path) }}"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $chicken->product_name }}</h5>
                        <p class="card-text">{{ $chicken->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menus/{{ $chicken->category_id }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr/>

        <h3 id="rice-noodle">Mỳ Ý - Cơm</h3>
        <div class="row">
            @foreach ($rices_noodles as $key => $rice_noodle)
                <div class="card btn" onclick="window.location.href='/menus/{{ $rice_noodle->category_id }}/{{ $rice_noodle->product_id }}'">
                    <img
                            src="{{ asset($rice_noodle->image_path) }}"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $rice_noodle->product_name }}</h5>
                        <p class="card-text">{{ $rice_noodle->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>

            @endforeach
        </div>
        <div class="row">
            <a href="/menus/{{ $rice_noodle->category_id }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr/>

        <h3 id="hamburger">Hamburger</h3>
        <div class="row">
            @foreach ($hamburgers as $key => $hamburger)
                <div class="card btn" onclick="window.location.href='/menus/{{ $hamburger->category_id }}/{{ $hamburger->product_id }}'">
                    <img
                            src="{{ asset($hamburger->image_path) }}"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $hamburger->product_name }}</h5>
                        <p class="card-text">{{ $hamburger->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menus/{{ $hamburger->category_id }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr/>

        <h3 id="ice-cream">Kem</h3>
        <div class="row">
            @foreach ($ice_creams as $ice_cream)
                <div class="card btn" onclick="window.location.href='/menus/{{ $ice_cream->category_id }}/{{ $ice_cream->product_id }}'">
                    <img
                            src="{{ asset($ice_cream->image_path) }}"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $ice_cream->product_name }}</h5>
                        <p class="card-text">{{ $ice_cream->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menus/{{ $ice_cream->category_id }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr/>

        <h3 id="drink">Thức uống</h3>
        <div class="row">
            @foreach ($drinks as $key => $drink)
                <div class="card btn" onclick="window.location.href='/menus/{{ $drink->category_id }}/{{ $drink->product_id }}'">
                    <img
                            src="{{ asset($drink->image_path) }}"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $drink->product_name }}</h5>
                        <p class="card-text">{{ $drink->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menus/{{ $drink->category_id }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr/>

        <h3 id="any-food">Món ăn kèm</h3>
        <div class="row">
            @foreach ($any_foods as $key => $any_food)
                <div class="card btn" onclick="window.location.href='/menus/{{ $any_food->category_id }}/{{ $any_food->product_id }}'">
                    <img
                            src="{{ asset($any_food->image_path) }}"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $any_food->product_name }}</h5>
                        <p class="card-text">{{ $any_food->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menus/{{ $any_food->category_id }}" class="btn bg-light">Xem thêm</a>
        </div>
    </div>
@endsection
