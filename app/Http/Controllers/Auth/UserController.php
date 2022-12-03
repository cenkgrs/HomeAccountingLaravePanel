<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('auth.login');
        }
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success_message', 'Giriş Yapıldı');
        }

        return redirect("login")->with('error_message', 'Kullanıcı adı veya şifre hatalı');
    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        return redirect('/login');
    }
}
