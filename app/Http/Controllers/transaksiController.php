<?php

namespace App\Http\Controllers;
use App\Models\dataTransaksi;

use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        $dataTransaksi = dataTransaksi::all();

        return view('admin.dataTransaksi', compact('dataTransaksi'));
    }
}
