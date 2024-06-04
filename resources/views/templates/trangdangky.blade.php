<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FastFood Restaurant</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/trangdangky.css">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: white"
            ><button class="btn btn-light">
              <img src="images/letter-f.png" height="30px" /></button
            >FastFood
          </a>

          <div class="input-group">
            <input
              class="form-control"
              type="search"
              placeholder="Tìm kiếm"
              aria-label="Search"
            />
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
    </main>
    <footer>
      <div class="row">
        <div class="col-5">
          <button class="btn btn-light">
            <img src="images/letter-f.png" height="65px" />
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
            <input
              class="form-control"
              type="search"
              placeholder="Tìm kiếm"
              aria-label="Search"
              height="50px"
              width="100px"
            />
            <button class="input-group-text">
              <i class="fa-solid fa-location-arrow"></i>
            </button>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
