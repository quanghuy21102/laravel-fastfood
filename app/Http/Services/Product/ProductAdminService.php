<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductAdminService
{
    public function insert($request)
    {
        try {
            $request->except('_token');
            Product::create($request->all());

            Session::flash('success', 'Thêm Sản phẩm thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm Sản phẩm lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $product)
    {
        try {
            $product->fill($request->input());
            $product->save();

            Session::flash('success', 'Cập nhật thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function delete($product)
    {
        try {
            Product::where('product_id', $product->product_id)->delete();
            Session::flash('success', 'Xóa sản phẩm thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa sản phẩm lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
}
