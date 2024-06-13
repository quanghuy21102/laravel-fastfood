<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index_admin()
    {
        return view('admin.login.index');
    }

    // Trang Register
    public function index_register()
    {
        return view('user.register.index', [
            'style' => 'css/trangdangky.css'
        ]);
    }

    // Trang Login
    public function index_login()
    {
        return view('user.login.index', [
            'style' => 'css/trangdangnhap.css'
        ]);
    }
    public function form_login(Request $request)
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
            return redirect()->route('home');
        }
        session()->flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }

    // Trang chủ
    public function index_home()
    {
        $products = Product::all();
        return view('user.home.index', [
            'style' => 'css/trangchu.css',
        ], compact('products'));
    }

    // Trang Menu
    public function index_menu()
    {
        $products = Product::all();
        $combos = Product::where('category', 'combo')->get();
        $chickens = Product::where('category', 'chicken')->get();
        $rices_noodles = Product::where('category', 'rice-noodle')->get();
        $hamburgers = Product::where('category', 'hamburger')->get();
        $icreams = Product::where('category', 'icream')->get();
        $drinks = Product::where('category', 'drink')->get();
        $anyfoods = Product::where('category', 'anyfood')->get();

        return view('user.menu.index', [
            'style' => 'css/trangthucdon.css',
        ], compact('combos', 'chickens', 'rices_noodles', 'hamburgers', 'icreams', 'drinks', 'anyfoods'));
    }
    public function menu_product()
    {
        return view('user.product.index', [
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
        $products = Product::where('category', $category)->get();
        return view('user.category.index', [
            'style' => 'css/trangphanloai.css',
        ], compact('products', 'title'));
    }
}
