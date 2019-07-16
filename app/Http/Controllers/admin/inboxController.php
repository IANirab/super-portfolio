<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\message;

class inboxController extends Controller
{
    public function index()
    {
        $message = message::orderby('id', 'DESC')->get();
        return view('admin.inbox')
            ->with('messages', $message);
    }

    public function show($id)
    {
        $message = message::where('id', $id)->first();
        return view('admin.message')
            ->with('message', $message);
    }

    public function destroy($id)
    {
        message::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Removed SuccessFully !!');
    }
}
