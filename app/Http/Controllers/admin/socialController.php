<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\social;

class socialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = social::all();
        return view('admin.socials')
            ->with('socials', $social);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        social::create(['icon' => $request->icon, 'link' => $request->link]);
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
        $social = social::where('id', $id)->first();
        return view('admin.edit-social')
            ->with('social', $social);
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
        social::where('id', $id)->update(['icon' => $request->icon, 'link' => $request->link]);
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
        social::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Removed Successfully !!');
    }
}
