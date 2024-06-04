<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('login', [
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
            return redirect()->route('home');
        }
        session()->flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
}
