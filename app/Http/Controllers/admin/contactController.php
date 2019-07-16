<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\contact;

class contactController extends Controller
{
    public function index()
    {
        $contact = contact::first();
        return view('admin.contacts')
            ->with('contact', $contact);
    }

    public function update(Request $request)
    {
        $contact = contact::first();
        $contact->update(['address' => $request->address, 'phone' => $request->phone, 'email' => $request->email]);
        return redirect()->back()->with('message', 'Updated Successfully !!');
    }
}
