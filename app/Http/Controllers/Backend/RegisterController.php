<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('register', [
            'style' => 'css/trangdangky.css'
        ]);
    }
}
