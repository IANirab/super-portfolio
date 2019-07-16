<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\portfolio;
use App\Model\category;

class portfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = portfolio::all();
        $category = category::all();
        return view('admin.portfolios')
            ->with('categorys', $category)
            ->with('portfolios', $portfolio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('admin.add-portfolio')
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
        $name = $request->name;
        $category = $request->category;
        $link = $request->link;

        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('img/portfolio'), $filename);
        } else {
            $filename = null;
        }

        portfolio::create([
            'category' => $category,
            'name' => $name,
            'img' => $filename,
            'link' => $link
        ]);
        return redirect()->back()->with('message', 'Created Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        portfolio::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Removed Successfully !!');
    }
}
