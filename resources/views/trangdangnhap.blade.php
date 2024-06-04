<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="google-signin-client_id"
          content="1068346628874-m61vcgh5vsv0p4f7j1sp2tcmvaq4ssgj.apps.googleusercontent.com"/>
    <title>FastFood Restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap"
          rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="css/trangdangnhap.css">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="" style="color: white">
                <button class="btn btn-light">
                    <img src="images/letter-f.png" height="30px"/></button>
                FastFood
            </a>
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Tìm kiếm" aria-label="Search"/>
                <button class="input-group-text">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white">Thực đơn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white">Khuyến mãi</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-light">
                            <i class="fa-regular fa-circle-user"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-light">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-light">
                            <i class="fa-regular fa-bell"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="row pt-5 pb-5">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <form method="POST" action="/store" class="w-75">
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
                    <span>Don't have an account</span><a href="{{route('register')}}">Sign up</a>
                </div>
                @csrf
            </form>
        </div>
        <div class="col-6">
            <img src="images/9d2485b7-c5ca-4ed0-8249-6144cd97347a.jpg" height="400px"/>
        </div>
    </div>
</main>
<footer>
    <div class="row">
        <div class="col-5">
            <button class="btn btn-light">
                <img src="images/letter-f.png" height="65px"/>
            </button>
            <h4>FASTFOOD.COM</h4>
            <p><i class="fa-solid fa-phone"></i>(084) 0123456789</p>
            <p>
                <i class="fa-solid fa-location-dot"></i>19 Nguyễn Hữu Thọ, Phường
                Tân Phong, Quận 7
            </p>
            <p><i class="fa-solid fa-at"></i>Fastfood@gmail.com</p>
        </div>
        <div class="col-2">
            <h6>THÔNG TIN</h6>
            <p>Tin tức</p>
            <p>Tuyển dụng</p>
            <p>Khuyến mãi</p>
            <p>Nhượng quyền</p>
        </div>
        <div class="col-2">
            <h6>HỖ TRỢ</h6>
            <p>Bảo mật thông tin</p>
            <p>Chính sách giao hàng</p>
            <p>Chăm sóc khách hàng</p>
        </div>
        <div class="col-3">
            <h6>FASTFOOD SOCIAL</h6>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <p>Đăng ký nhận email</p>
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Tìm kiếm" aria-label="Search" height="50px"
                       width="100px"/>
                <button class="input-group-text">
                    <i class="fa-solid fa-location-arrow"></i>
                </button>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
