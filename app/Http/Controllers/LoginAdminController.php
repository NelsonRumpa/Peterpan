<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginAdminController extends Controller
{
    public function loginadmin(Request $request)
    {
        // dd($request);
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = $request->only('username', 'password');

        if (Auth::attempt($data))
        {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back();

    }
}