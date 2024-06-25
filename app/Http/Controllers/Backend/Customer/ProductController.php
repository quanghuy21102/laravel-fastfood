<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Category $category, Product $product)
    {
        $products = Product::where([
            ['product_id', '<>', $product->product_id],
            ['category_id', $category->category_id],
        ])->get();
        return view('customer.product.index', [
           'style' => 'css/trangchitiet.css',
           'category' => $category,
           'product' => $product,
        ], compact('products'));
    }
}
