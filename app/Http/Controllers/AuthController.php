<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): View
    {
       return view('admin.auth.login');
    }

    public function postLogin(LoginRequest $request){
        if (Auth::attempt($request->only('email', 'password'))){
            Auth::login(User::where('email',$request->email)->first());
            return redirect()->route('admin.index');
        }

        return redirect()->route('admin.auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
