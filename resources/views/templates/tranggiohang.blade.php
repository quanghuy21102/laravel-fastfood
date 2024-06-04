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

    <link rel="stylesheet" href="css/tranggiohang.css">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <button class="btn btn-light">
              <img src="image/letter-f.png" height="30px" /></button
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
                <a class="nav-link" href="trangthucdon.html">Thực đơn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Khuyến mãi</a>
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
      <div class="row text-center">
        <h3>Giỏ hàng của tôi</h3>

        <hr />

        <div class="row">
          <div
            class="container"
            style="display: flex; justify-content: center; align-items: center"
          >
            <input type="checkbox" name="checkbox" id="checkbox" style="width: 20px; height: 20px;"/>
            <label for="checkbox"></label>
            <img src="image/burger.png" style="width: 8%; margin-left: 70px" />
            <p style="margin: 0; margin-left: 70px">Burger Phô mai</p>
            <p
              style="
                margin: 0;
                margin-left: 120px;
                font-family: 'Coiny', sans-serif;
                font-weight: bold;
              "
            >
              50.000 đ
            </p>
            <form action="" style="padding-left: 40px">
              <button
                class="btn"
                style="
                  width: 30px;
                  height: 30px;
                  color: white;
                  background-color: #d00000;
                  border-radius: 10px;
                  padding: 0;
                "
              >
                <p
                  style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 0;
                  "
                >
                  -
                </p>
              </button>
              <input
                type="text"
                name="number"
                id="textnumber"
                disabled="true"
                placeholder="1"
                aria-disabled="true"
                aria-readonly="true"
                style="width: 30px; text-align: center"
              />
              <button
                class="btn"
                style="
                  width: 30px;
                  height: 30px;
                  color: white;
                  background-color: #d00000;
                  border-radius: 10px;
                  padding: 0;
                "
              >
                <p
                  style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 0;
                  "
                >
                  +
                </p>
              </button>
            </form>
            <p
              style="
                margin: 0;
                margin-left: 40px;
                font-family: 'Coiny', sans-serif;
                font-weight: bold;
              "
            >
              50.000 đ
            </p>
            <button
              class="btn btn-light"
              style="
                width: 40px;
                height: 40px;
                margin-left: 40px;
                padding: 0;
                color: #d00000;
              "
            >
              <i
                class="fa-regular fa-trash-can"
                style="
                  font-size: x-large;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              ></i>
            </button>
          </div>
        </div>

        <hr />

        <div
          class="container"
          style="
            display: flex;
            justify-content: right;
            align-items: center;
            padding-right: 160px;
          "
        >
          <p
            style="
              margin: 0;
              padding-right: 20px;
              font-family: 'Coiny', sans-serif;
              font-weight: bold;
            "
          >
            Tổng tiền: 50.000 đ
          </p>
          <button
            class="btn btn-light"
            style="background-color: #d00000; color: white; border-radius: 10px"
          >
            Thanh toán
          </button>
        </div>
      </div>
    </main>
    <footer>
      <div class="row">
        <div class="col-5">
          <button class="btn btn-light">
            <img src="image/letter-f.png" height="65px" />
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
