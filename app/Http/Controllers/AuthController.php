<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // index
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (\Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect()->route('notes.index');
    }

    // cookie based logout
    public function logout(Request $request)
    {
        \Auth::logout();
        return redirect()->route('notes.index');
    }
}
