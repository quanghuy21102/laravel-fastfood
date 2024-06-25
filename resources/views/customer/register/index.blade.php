@extends('customer.main')

@section('content')
    <div class="row pt-5 pb-5">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <form method="POST" action="" class="w-75">
                @csrf
                <h1>Tạo tài khoản</h1>
                <hr>
                @include('errors.alert')
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                            type="email"
                            class="form-control"
                            placeholder="Nhập email"
                            name="email"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input
                            type="password"
                            class="form-control"
                            placeholder="Nhập mật khẩu"
                            name="password"
                    />
                </div>
                <button type="submit" class="btn btn-form text-light">
                    Sign Up
                </button>
                <div class="mb-3 text-center" style="margin-top: 10px">
                    <span>Already have an account?</span><a href="{{ route('customer.login') }}">Sign in</a>
                </div>
            </form>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <img
                    src="{{ asset('storage/images/ComboGa2.jpg') }}"
                    height="450px"
            />
        </div>
    </div>
@endsection
