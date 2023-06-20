<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addData;
use Illuminate\Support\Facades\DB;

class AddDataController extends Controller
{
    public function index()
    {
        $dataDonasi = addData::all();

        return view('admin.addData', compact('dataDonasi'));
    }
}
