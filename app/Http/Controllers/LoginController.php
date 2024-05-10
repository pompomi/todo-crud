<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (\Illuminate\Support\Facades\Auth::check()) 
        {
            return redirect('/');
        } else
        {
            return view('auth.login');
        }
    }

    public function login(Request $request) 
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (\Illuminate\Support\Facades\Auth::attempt($data)) 
        {
            return redirect('/');
        } else 
        {
            \Illuminate\Support\Facades\Session::flash('login-failed', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function logout()
    {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect('login');
    }
}
