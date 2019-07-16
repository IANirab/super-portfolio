<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\counter;

class counterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter = counter::all();
        return view('admin.counters')
            ->with('counters', $counter);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-counter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        counter::create(['name' => $request->name, 'icon' => $request->icon, 'number' => $request->number]);
        return redirect()->back()->with('message', 'Created SuccessFully !!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $counter = counter::where('id', $id)->first();
        return view('admin.edit-counter')
            ->with('counter', $counter);
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
        counter::where('id', $id)->update(['name' => $request->name, 'icon' => $request->icon, 'number' => $request->number]);
        return redirect()->back()->with('message', 'Updated SuccessFully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        counter::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Removed SuccessFully !!');
    }
}
