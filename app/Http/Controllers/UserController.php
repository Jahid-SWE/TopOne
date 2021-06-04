<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.add');
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email  = $request->email ;
        $user->password = bcrypt($request->password);
        $user->access_label = $request->access_label;
        $user->save();
        return redirect()->back()->with('message', 'New USer create successfully.');
    }

    public function manage()
    {
        return view('admin.user.manage');
    }
}
