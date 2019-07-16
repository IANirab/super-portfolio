<?php

namespace App\Http\Controllers;

use App\Model\about;
use App\Model\category;
use App\Model\counter;
use App\Model\header;
use App\Model\headtext;
use App\Model\portfolio;
use App\Model\post;
use App\Model\postcategory;
use App\Model\review;
use App\Model\service;
use App\Model\social;
use Illuminate\Http\Request;
use App\Model\contact;
use App\Model\message;
use App\Mail\contactMail;
use App\User;
use App\Model\skill;
use App\Model\metaSide;

class homeController extends Controller
{
  public function index()
  {
    $header = header::first();
    $social = social::all();
    $headtext = headtext::all();
    $about = about::first();
    $service = service::all();
    $category = category::all();
    $portfolio = portfolio::all();
    $review = review::all();
    $counter = counter::all();
    $post = post::orderby('id', 'DESC')->get();
    $postcategory = postcategory::all();
    $contact = contact::first();
    $skill = skill::all();
    $meta = metaSide::first();
    return view('home')
      ->with('socials', $social)
      ->with('headtexts', $headtext)
      ->with('about', $about)
      ->with('services', $service)
      ->with('categorys', $category)
      ->with('portfolios', $portfolio)
      ->with('reviews', $review)
      ->with('counters', $counter)
      ->with('postcategorys', $postcategory)
      ->with('posts', $post)
      ->with('skills', $skill)
      ->with('contact', $contact)
      ->with('meta', $meta)
      ->with('header', $header);
  }

  public function contact(Request $request)
  {
    message::create(['name' => $request->name, 'email' => $request->email, 'message' => $request->message]);
    $user = User::first();
    Mail::to($user->email)->send(new contactMail($request->name, $request->email, $request->message));
    return redirect('thank-you');
  }
}
