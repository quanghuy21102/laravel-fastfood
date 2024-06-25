<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $combos = Product::where('category_id', 'combo')->get();
        $chickens = Product::where('category_id', 'chicken')->get();
        $rices_noodles = Product::where('category_id', 'rice-noodle')->get();
        $hamburgers = Product::where('category_id', 'hamburger')->get();
        $ice_creams = Product::where('category_id', 'ice-cream')->get();
        $drinks = Product::where('category_id', 'drink')->get();
        $any_foods = Product::where('category_id', 'any-food')->get();

        return view('customer.menu.index', [
            'style' => 'css/trangthucdon.css',
        ], compact('combos', 'chickens', 'rices_noodles', 'hamburgers', 'ice_creams', 'drinks', 'any_foods'));
    }

    public function show(Category $category)
    {
        $products = Product::where('category_id', $category->category_id)->get();
        return view('customer.category.index', [
            'style' => 'css/trangphanloai.css',
            'title' => $category->category_name,
            'category' => $category,
        ], compact('products'));
    }
}
