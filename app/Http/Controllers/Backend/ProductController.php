<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Account;

class ProductController extends Controller
{
    public function index()
    {
        $products = Account::all();
        dd($products);
    }
}
