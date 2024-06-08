@extends('layouts/main')

@section('content')
    <div class="row text-center">
        <div class="row">
            <div
                class="card btn btn-primary"
                onclick="window.scrollTo({
            top: document.getElementById('combo').offsetTop,
            behavior: 'smooth'})"
            >
                <img src="{{ asset('storage/images/combox.png') }}" class="card-img card-img-top"/>
                <div class="card-body">
                    <p class="card-title">Combo</p>
                </div>
            </div>
            <div
                class="card btn btn-primary"
                onclick="window.scrollTo({
            top: document.getElementById('chicken').offsetTop,
            behavior: 'smooth'})"
            >
                <img src="{{ asset('storage/images/chicken.png') }}" class="card-img card-img-top"/>
                <div class="card-body">
                    <p class="card-title">Gà rán</p>
                </div>
            </div>
            <div
                class="card btn btn-primary"
                onclick="window.scrollTo({
            top: document.getElementById('rice-noodle').offsetTop,
            behavior: 'smooth'})"
            >
                <div class="row p-0">
                    <img src="{{ asset('storage/images/spaghetti.png') }}" class="card-img card-img-top"/>
                    <img src="{{ asset('storage/images/rice.png') }}" class="card-img card-img-top"/>
                </div>

                <div class="card-body">
                    <p class="card-title">Mỳ Ý - Cơm</p>
                </div>
            </div>
            <div
                class="card btn btn-primary"
                onclick="window.scrollTo({
            top: document.getElementById('hamburger').offsetTop,
            behavior: 'smooth'})"
            >
                <img src="{{ asset('storage/images/burger.png') }}" class="card-img card-img-top"/>
                <div class="card-body">
                    <p class="card-title">Hamburger</p>
                </div>
            </div>
            <div
                class="card btn btn-primary"
                onclick="window.scrollTo({
            top: document.getElementById('icream').offsetTop,
            behavior: 'smooth'})"
            >
                <img src="{{ asset('storage/images/ice-cream.png') }}" class="card-img card-img-top"/>
                <div class="card-body">
                    <p class="card-title">Kem</p>
                </div>
            </div>
            <div
                class="card btn btn-primary"
                onclick="window.scrollTo({
            top: document.getElementById('drink').offsetTop,
            behavior: 'smooth'})"
            >
                <img src="{{ asset('storage/images/drink.png') }}" class="card-img card-img-top"/>
                <div class="card-body">
                    <p class="card-title">Thức uống</p>
                </div>
            </div>
            <div
                class="card btn btn-primary"
                onclick="window.scrollTo({
            top: document.getElementById('anyfood').offsetTop,
            behavior: 'smooth'})"
            >
                <img src="{{ asset('storage/images/anyfood.png') }}" class="card-img card-img-top"/>
                <div class="card-body">
                    <p class="card-title">Món ăn kèm</p>
                </div>
            </div>
        </div>

        <hr/>

        <h3>{{ $title }}</h3>
        <div class="row">
            @foreach ($products as $product)
                <div class="card">
                    <img src="{{ asset($product->image_path) }}" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->price }} đ</p>
                        <a href="#" class="btn">Thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
