<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddData;
use Illuminate\Support\Facades\DB;

class GetdataController extends Controller
{
    public function index()
    {
        $dataDonasi = addData::all();
        return view('home', compact('dataDonasi'));
    }
}