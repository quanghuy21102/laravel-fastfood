<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index', [
            'title' => 'Đăng Nhập Hệ Thống'
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

        $admin = Account::where('email', $request->input('email'))->first();

        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]
        ) && ($admin->role == 'admin')) {
            return redirect()->route('admin.home');
        }
        session()->flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
}
