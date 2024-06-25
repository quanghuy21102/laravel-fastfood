<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function index()
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

        $customer = Account::where('email', $request->input('email'))->first();

        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        ) && ($customer->role == 'customer')){
            return redirect()->route('customer.home');
        }
        session()->flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
}
