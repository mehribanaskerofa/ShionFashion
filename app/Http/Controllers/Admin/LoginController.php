<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('admin.index');
        }
        return view('admin.login.index');
    }

    public function login(LoginAdminRequest $request)
    {
        if(auth()->attempt($request->only('email','password'),$request->remember_token==1)){
//            dd(auth()->user());
            return redirect()->route('admin.home');
        }

        return  redirect()->back();
    }
    public function logout()
    {
        if(auth()->check()){
            auth()->logout();
        }

        return redirect()->route('admin.login');
    }
}
