<?php

namespace App\Http\Controllers;

use App\Model\header;
use App\Model\post;
use App\Model\postcategory;
use App\Model\social;
use Illuminate\Http\Request;
use App\Model\metaSide;

class blogController extends Controller
{
	public function index()
	{
		$header = header::first();
		$social = social::all();
		$post = post::orderby('id', 'DESC')->get();
		$postcategory = postcategory::all();
		$meta = metaSide::first();
		return view('blog')
			->with('header', $header)
			->with('postcategorys', $postcategory)
			->with('posts', $post)
			->with('meta', $meta)
			->with('socials', $social);
	}

	public function post($slug)
	{
		$header = header::first();
		$post = post::where('slug', $slug)->first();
		$postcategory = postcategory::all();
		$meta = metaSide::first();
		return view('post')
			->with('header', $header)
			->with('postcategorys', $postcategory)
			->with('meta', $meta)
			->with('post', $post);
	}
}
