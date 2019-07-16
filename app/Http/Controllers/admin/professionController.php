<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\headtext;

class professionController extends Controller
{
    public function index()
    {
        $header = headtext::all();
        return view('admin.professions')
            ->with('headers', $header);
    }

    public function store(Request $request)
    {
        headtext::create(['text' => $request->text]);
        return redirect()->back()->with('message', 'Created Successfully !!');
    }

    public function edit($id)
    {
        $header = headtext::where('id', $id)->first();
        return view('admin.edit-profession')
            ->with('header', $header);
    }

    public function update(Request $request, $id)
    {
        headtext::where('id', $id)->update(['text' => $request->name]);
        return redirect()->back()->with('message', 'Updated Successfully !!');
    }

    public function destroy($id)
    {
        headtext::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Removed Successfully !!');
    }
}
