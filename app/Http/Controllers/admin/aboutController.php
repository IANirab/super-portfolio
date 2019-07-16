<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\about;

class aboutController extends Controller
{
    public function index()
    {
        $about = about::first();
        return view('admin.about-me')
            ->with('about', $about);
    }

    public function update(Request $request, $id)
    {
        $about = about::first();
        if ($request->hasFile('img')) {
            $filename = time() . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path('img'), $filename);
            $about->update(['img' => $filename, 'tagline' => $request->tagline, 'body' => $request->body, 'link' => $request->link]);
        } else {
            $about->update(['tagline' => $request->tagline, 'body' => $request->body, 'link' => $request->link]);
        }
        return redirect()->back()->with('message', 'Updated SuccessFully !!');
    }
}
