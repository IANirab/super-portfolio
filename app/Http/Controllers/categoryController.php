<?php

namespace App\Http\Controllers;

use App\Model\header;
use App\Model\post;
use App\Model\postcategory;
use App\Model\social;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index($id)
    {
        $header = header::first();
        $social = social::all();
        $post = post::where('category', $id)->orderby('id', 'DESC')->get();
        $postcategory = postcategory::where('id', $id)->first();
        $meta = metaSide::first();
        return view('category')
            ->with('header', $header)
            ->with('postcategory', $postcategory)
            ->with('posts', $post)
            ->with('meta', $meta)
            ->with('socials', $social);
    }
}
