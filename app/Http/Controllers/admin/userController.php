<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class userController extends Controller
{
    public function index()
    {
        $user = User::first();
        return view('admin.user')
            ->with('user', $user);
    }

    public function update(Request $request)
    {
        $user = User::first();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->back()->with('message', 'Updated SuccessFully !!');
    }
}
