<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $products = Account::all();
        $combos = Account::where('category', 'combo')->get();
        $chickens = Account::where('category', 'chicken')->get();
        $rices_noodles = Account::where('category', 'rice-noodle')->get();
        $hamburgers = Account::where('category', 'hamburger')->get();
        $icreams = Account::where('category', 'icream')->get();
        $drinks = Account::where('category', 'drink')->get();
        $anyfoods = Account::where('category', 'anyfood')->get();

        return view('product', [
            'style' => 'css/trangthucdon.css',
        ], compact('combos', 'chickens', 'rices_noodles', 'hamburgers', 'icreams', 'drinks', 'anyfoods'));
    }
}
