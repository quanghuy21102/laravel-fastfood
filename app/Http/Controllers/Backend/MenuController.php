<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $combos = Product::where('category', 'combo')->get();
        $chickens = Product::where('category', 'chicken')->get();
        $rices_noodles = Product::where('category', 'rice-noodle')->get();
        $hamburgers = Product::where('category', 'hamburger')->get();
        $icreams = Product::where('category', 'icream')->get();
        $drinks = Product::where('category', 'drink')->get();
        $anyfoods = Product::where('category', 'anyfood')->get();

        return view('menu', [
            'style' => 'css/trangthucdon.css',
        ], compact('combos', 'chickens', 'rices_noodles', 'hamburgers', 'icreams', 'drinks', 'anyfoods'));
    }
}
