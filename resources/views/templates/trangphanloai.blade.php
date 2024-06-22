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

    <link rel="stylesheet" href="css/trangphanloai.css">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="trangchu.html">
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
            <button class="input-group-text" style="color: white">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Thực đơn</a>
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
        <div class="row">
          <div
            class="card btn btn-primary"
            onclick="window.scrollTo({
            top: document.getElementById('combo').offsetTop,
            behavior: 'smooth'})"
          >
            <img src="image/business.png" class="card-img card-img-top" />
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
            <img src="image/fried-chicken.png" class="card-img card-img-top" />
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
            <div class="row">
              <img src="image/spaguetti.png" class="card-img card-img-top" />
              <img src="image/fried-rice.png" class="card-img card-img-top" />
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
            <img src="image/burger.png" class="card-img card-img-top" />
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
            <img src="image/ice-cream.png" class="card-img card-img-top" />
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
            <img src="image/soda.png" class="card-img card-img-top" />
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
            <img src="image/fish-and-chips.png" class="card-img card-img-top" />
            <div class="card-body">
              <p class="card-title">Món ăn kèm</p>
            </div>
          </div>
        </div>

        <hr />

        <h3>Gà rán</h3>
        <!-- <div class="row">
          <h3>Gà rán</h3>
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"
          >
            Dropdown link
          </a>
          <div class="dropdown-product" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div> -->

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
              <img
                src="image/chicken wings.jpg"
                class="card-img-top"
                alt="..."
              />
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
