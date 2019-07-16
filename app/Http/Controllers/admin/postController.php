<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\post;
use App\Model\postcategory;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::orderby('id', 'DESC')->paginate(10);
        $category = postcategory::all();
        return view('admin.all-posts')
            ->with('posts', $post)
            ->with('categorys', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = postcategory::all();
        return view('admin.add-post')
            ->with('categorys', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $category = $request->category;
        $slug = $request->slug;

        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('img/blog'), $filename);
        } else {
            $filename = null;
        }

        $insertPost = post::create([
            'category' => $category,
            'title' => $title,
            'body' => $body,
            'img' => $filename,
            'slug' => $slug
        ]);
        return redirect()->back()->with('message', 'Created Successfully !!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::where('id', $id)->first();
        $category = postcategory::all();
        return view('admin.edit-post')
            ->with('post', $post)
            ->with('categorys', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->title;
        $body = $request->body;
        $category = $request->category;
        $slug = $request->slug;

        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('img/blog'), $filename);
            post::where('id', $id)->update([
                'category' => $category,
                'title' => $title,
                'body' => $body,
                'img' => $filename,
                'slug' => $slug
            ]);
        } else {
            $filename = null;
            post::where('id', $id)->update([
                'category' => $category,
                'title' => $title,
                'body' => $body,
                'slug' => $slug
            ]);
        }
        return redirect()->back()->with('message', 'Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Removed Successfully !!');
    }
}
