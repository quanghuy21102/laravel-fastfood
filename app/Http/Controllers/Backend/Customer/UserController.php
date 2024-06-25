<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Trang Register
    public function indexRegister()
    {
        return view('customer.register.index', [
            'style' => 'css/trangdangky.css'
        ]);
    }

    // Trang Login
    public function indexLogin()
    {
        return view('customer.login.index', [
            'style' => 'css/trangdangnhap.css'
        ]);
    }
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email:filter',
                'password' => 'required'
            ],
            [
                'email' => 'Vui lòng nhập email',
                'password' => 'Vui lòng nhập password',
            ]
        );

        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]
        )) {
            return redirect()->route('customer.home');
        }
        session()->flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }

    // Trang chủ
    public function indexHome()
    {
        $products = Account::all();
        return view('customer.home.index', [
            'style' => 'css/trangchu.css',
        ], compact('products'));
    }

    // Trang Menu
    public function index_menu()
    {
        $products = Account::all();
        $combos = Account::where('category', 'combo')->get();
        $chickens = Account::where('category', 'chicken')->get();
        $rices_noodles = Account::where('category', 'rice-noodle')->get();
        $hamburgers = Account::where('category', 'hamburger')->get();
        $icreams = Account::where('category', 'icream')->get();
        $drinks = Account::where('category', 'drink')->get();
        $anyfoods = Account::where('category', 'anyfood')->get();

        return view('customer.product.index', [
            'style' => 'css/trangthucdon.css',
        ], compact('combos', 'chickens', 'rices_noodles', 'hamburgers', 'icreams', 'drinks', 'anyfoods'));
    }
    public function menu_product()
    {
        return view('customer.product.index', [
            'style' => 'css/trangchitiet.css',
        ]);
    }

    // Trang Category
    public function index_category($category)
    {
        $title = '';
        if ($category == 'combo') {
            $title = 'Combo';
        } elseif ($category == 'chicken') {
            $title = 'Gà rán';
        } elseif ($category == 'rice-noodle') {
            $title = 'Mỳ Ý - Cơm';
        } elseif ($category == 'hamburger') {
            $title = 'Hamburger';
        } elseif ($category == 'icream') {
            $title = 'Kem';
        } elseif ($category == 'drink') {
            $title = 'Thức uống';
        } elseif ($category == 'anyfood') {
            $title = 'Món ăn kèm';
        }
        $products = Account::where('category', $category)->get();
        return view('customer.category.index', [
            'style' => 'css/trangphanloai.css',
        ], compact('products', 'title'));
    }
}
