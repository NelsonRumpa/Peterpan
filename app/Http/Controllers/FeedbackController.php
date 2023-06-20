<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
    
        $user = User::find($id);
        
        // $user = User::all();
        // dd($user);
        return view('feedback', compact('user'));
    }
}
