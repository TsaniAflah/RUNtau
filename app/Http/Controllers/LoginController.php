<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //untuk mengirim data dari file login
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    //untuk menentukan aturan dalam form login dan mengecek isinya benar atau salah 
    public function authenticate(Request $request)
    { 
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }




        return back()->with('invalidlogin', 'Invalid email or password');
    }

    //untuk keluar akun
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
