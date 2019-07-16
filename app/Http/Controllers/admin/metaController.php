<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\metaSide;

class metaController extends Controller
{
    public function index()
    {
        $meta = metaSide::first();
        return view('admin.meta')
            ->with('meta', $meta);
    }

    public function update(Request $request)
    {
        $meta = metaSide::first();
        $meta->update(['title' => $request->title, 'keywords' => $request->keywords, 'description' => $request->description]);
        return redirect()->back()->with('message', 'Updated SuccessFully !!');
    }
}
