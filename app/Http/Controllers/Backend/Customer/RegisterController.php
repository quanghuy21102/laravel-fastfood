<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\AccountRequest;
use App\Http\Services\Account\AccountService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function index()
    {
        return view('customer.register.index', [
            'style' => 'css/trangdangky.css',
        ]);
    }

    public function register(AccountRequest $request)
    {
        $this->accountService->insert($request);

        return redirect()->back();
    }
}
