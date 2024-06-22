@extends('admin.main')

@section('content')
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group d-flex align-items-center justify-content-center">
                <div id="image_show">

                </div>
                <input type="hidden" name="image_path" id="image_path">
            </div>
            <div class="form-group d-flex align-items-center justify-content-center">
                <label class="m-0 px-3" for="">Chèn ảnh</label>
                <input class="form-control w-50" type="file" id="upload">

            </div>
            <div class="form-group d-flex align-items-center justify-content-center">
                <label class="m-0 px-3" for="">Tên món</label>
                <input class="form-control w-50" type="text" name="product_name" value="{{ old('product_name') }}" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group d-flex align-items-center justify-content-center">
                <label class="m-0 px-3" for="">Giá tiền</label>
                <input class="form-control w-50" type="number" name="price" value="{{ old('price') }}" placeholder="Nhập giá tiền">
            </div>
            <div class="form-group d-flex align-items-center justify-content-center">
                <label class="m-0 px-3" for="">Chọn loại</label>
                <select class="form-control w-50" name="category_id">
                    <option value="CO">Combo</option>
                    <option value="CH">Gà</option>
                    <option value="RN">Cơm - Mì</option>
                    <option value="HA">Hamburger</option>
                    <option value="IC">Kem</option>
                    <option value="DR">Nước uống</option>
                    <option value="AN">Món ăn khác</option>
                </select>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary" type="submit">Thêm</button>
                <button class="btn btn-danger" type="reset">Hủy</button>
            </div>
            @csrf
        </form>
    </div>
@endsection
