<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('customer.home') }}">
            <button class="btn btn-light">
                <img src="{{ asset('storage/images/logo.png') }}" height="30px" /></button
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
                    <a class="nav-link" href="{{ route('customer.menu') }}">Thực đơn</a>
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
                    <button class="btn btn-light" onclick="window.location.href='trangthanhtoan.html'">
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
