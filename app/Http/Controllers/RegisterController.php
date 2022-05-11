<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     
    public function index()
    {
        return view('register.index',[
            'title'=>'Register']);
    }

    public function store(Request $request)
    {
        $request->validate ([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $request-> session()->flash('success','Registration successfull! please login');

        return redirect('/login');
    }
}
