@extends('layouts/main')

@section('content')
    <div class="row">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <form method="post" action="" class="w-75">
                <h1>Tạo tài khoản</h1>
                <div class="mb-3">
                    <label class="form-label">Họ và tên</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Nhập họ và tên"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        placeholder="Nhập email"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input
                        type="password"
                        class="form-control"
                        placeholder="Nhập mật khẩu"
                    />
                </div>
                <button
                    onclick="window.location.href='trangdangnhap.html'"
                    type="button"
                    class="btn text-light"
                >
                    Sign Up
                </button>
                <div class="mb-3 text-center" style="margin-top: 10px">
                    <span>Already have an account?</span><a href="{{route('login')}}">Sign in</a>
                </div>
            </form>
        </div>
        <div class="col-6">
            <img
                src="images/9d2485b7-c5ca-4ed0-8249-6144cd97347a.jpg"
                height="450px"
            />
        </div>
    </div>
@endsection
