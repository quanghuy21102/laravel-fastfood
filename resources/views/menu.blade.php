@extends('layouts/main')

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
            top: document.getElementById('icream').offsetTop,
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
            top: document.getElementById('anyfood').offsetTop,
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

        <hr />

        <h3 id="combo">Combo</h3>
        <div class="row" id="combo">
            @foreach ($combos as $combo)
                <div class="card">
                    <img
                        src="{{ asset($combo->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $combo->name }}</h5>
                        <p class="card-text">{{ $combo->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menu/{{ $combo->category }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr />

        <h3 id="chicken">Gà rán</h3>
        <div class="row">
            @foreach ($chickens as $chicken)
                <div class="card">
                    <img
                        src="{{ asset($chicken->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $chicken->name }}</h5>
                        <p class="card-text">{{ $chicken->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menu/{{ $chicken->category }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr />

        <h3 id="rice-noodle">Mỳ Ý - Cơm</h3>
        <div class="row">
            @foreach ($rices_noodles as $rice_noodle)
                <div class="card">
                    <img
                        src="{{ asset($rice_noodle->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $rice_noodle->name }}</h5>
                        <p class="card-text">{{ $rice_noodle->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>

            @endforeach
        </div>
        <div class="row">
            <a href="/menu/{{ $rice_noodle->category }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr />

        <h3 id="hamburger">Hamburger</h3>
        <div class="row">
            @foreach ($hamburgers as $hamburger)
                <div class="card">
                    <img
                        src="{{ asset($hamburger->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $hamburger->name }}</h5>
                        <p class="card-text">{{ $hamburger->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menu/{{ $hamburger->category }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr />

        <h3 id="icream">Kem</h3>
        <div class="row">
            @foreach ($icreams as $icream)
                <div class="card">
                    <img
                        src="{{ asset($icream->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $icream->name }}</h5>
                        <p class="card-text">{{ $icream->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menu/{{ $icream->category }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr />

        <h3 id="drink">Thức uống</h3>
        <div class="row">
            @foreach ($drinks as $drink)
                <div class="card">
                    <img
                        src="{{ asset($drink->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $drink->name }}</h5>
                        <p class="card-text">{{ $drink->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menu/{{ $drink->category }}" class="btn bg-light">Xem thêm</a>
        </div>

        <hr />

        <h3 id="anyfood">Món ăn kèm</h3>
        <div class="row">
            @foreach ($anyfoods as $anyfood)
                <div class="card">
                    <img
                        src="{{ asset($anyfood->image_path) }}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $anyfood->name }}</h5>
                        <p class="card-text">{{ $anyfood->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a href="/menu/{{ $anyfood->category }}" class="btn bg-light">Xem thêm</a>
        </div>
    </div>
@endsection
