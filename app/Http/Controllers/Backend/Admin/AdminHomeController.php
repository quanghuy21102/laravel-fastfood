<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home', [
            'title' => 'Trang quản trị Admin',
        ]);
    }
}
