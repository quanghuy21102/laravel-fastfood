<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $products = Account::all();
        return view('home', [
            'style' => 'css/trangchu.css',
        ], compact('products'));
    }
}
