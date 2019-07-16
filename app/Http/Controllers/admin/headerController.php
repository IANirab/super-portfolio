<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\header;

class headerController extends Controller
{
    public function index()
    {
        $header = header::first();
        return view('admin.header-settings')
            ->with('header', $header);
    }

    public function update(Request $request)
    {
        $header = header::first();
        if ($request->hasFile('img')) {
            $filename = time() . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path('img'), $filename);
            $header->update(['img' => $filename, 'name' => $request->name]);
        } else {
            $header->update(['name' => $request->name]);
        }
        return redirect()->back()->with('message', 'Updated SuccessFully !!');
    }
}
