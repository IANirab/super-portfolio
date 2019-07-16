<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class authController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin');
        } else {
            return redirect()->back()->with('message', "Email & Password Didn't Matched !!");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
