@extends('user.main')

@section('content')
    <div class="row pt-5 pb-5">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <form method="POST" action="" class="w-75">
                <h1>Welcome back</h1>
                <div class="social-auth-links">
                    <button class="btn link-google" style="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                            <path fill="#4285F4" d="M24 9.5c3.9 0 6.4 1.6 7.9 2.9L36.4 8C32.7 4.8 28 3 24 3 14.6 3 7.1 8.5 4.2 16l7.5 5.8c2.1-6 7.6-10.3 14.3-10.3z"/>
                            <path fill="#34A853" d="M24 45c5.9 0 10.9-1.9 14.5-5.1l-7.2-5.7C29.4 35.9 26.8 37 24 37c-6.7 0-12.3-4.3-14.3-10.2l-7.5 5.8C7.1 39.5 14.6 45 24 45z"/>
                            <path fill="#FBBC05" d="M43.6 20H24v8.5h11.1c-.6 3.1-2.4 5.8-5.1 7.6l7.2 5.7c4.2-3.8 6.8-9.5 6.8-16.3 0-1.3-.1-2.5-.4-3.7z"/>
                            <path fill="#EA4335" d="M9.7 28c-.5-1.3-.7-2.7-.7-4.2s.2-2.9.7-4.2L2.1 13.8C.8 16.4 0 19.6 0 23s.8 6.6 2.1 9.2L9.7 28z"/>
                        </svg>
                        <span style="">Đăng nhập bằng Google</span>
                    </button>
                </div>
                <hr/>
                @include('errors.alert')
                <div class="mb-3" >
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"/>
                </div>
                <button type="submit" class="btn btn-form text-light">
                    Sign In
                </button>
                <div class="mb-3 text-center" style="margin-top: 10px">
                    <span>Don't have an account</span><a href="{{ route('user.register') }}">Sign up</a>
                </div>
                @csrf
            </form>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('storage/images/ComboGa2.jpg') }}" height="400px"/>
        </div>
    </div>
@endsection
