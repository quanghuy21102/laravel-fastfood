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
        return view('trangdangnhap');
    }

    public function login(Request $request)
    {
        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]
        )) {
            return redirect()->route('home');
        }

        return redirect()->back();
    }
}
