<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('login', compact('user'));
    }
    public function register()
    {
        return view('register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
 
        $user->save();
 
        return back()->with('success', 'Berhasil Mendaftar');
    }
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $account = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($account)) {
            return redirect('/beranda')->with('success', 'Berhasil Masuk!');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
