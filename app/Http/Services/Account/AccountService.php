<?php

namespace App\Http\Services\Account;

use App\Models\Account;
use Illuminate\Support\Facades\Session;

class AccountService
{
    public function insert($request)
    {
        try {
            $request->except('_token');
            Account::create($request->all());

            Session::flash('success', 'Tạo tài khoản thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo tài khoản lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $account)
    {

    }
}
