<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function home(){
        return view(('welcome'));
    }

    public function register(){
        return view('register');
    }


    public function registerPost(Request $request)
    {
        // dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->usercode = strtolower(str_replace(' ', '-', $request->name)) . mt_rand(10000000, 99999999);
        $user->save();
        return redirect()->route('user-login');
    }

    public function login(){
        return view('login');
    }


    public function loginPost(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password');
        $credentials['password'] = $request->password;
        // dd($credentials);
        if (Auth::guard('web')->attempt($credentials)) {  
            return redirect()->route('user-dashboard');
        } else {
            return back();
        }
    }

    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('user-login');
    }
}
