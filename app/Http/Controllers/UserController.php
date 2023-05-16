<?php

namespace App\Http\Controllers;

use App\Events\UserRegisterEvent;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registeruser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user=User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        UserRegisterEvent::dispatch();
        return view('home');
    }
}
