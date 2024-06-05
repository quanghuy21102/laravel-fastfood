<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $products = Product::all();
        return view('home', [
            'style' => 'css/trangchu.css',
        ], compact('products'));
    }
}
