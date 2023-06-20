<?php

namespace App\Http\Controllers;

use App\Models\addDonasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class tambahdonasiController extends Controller
{
    // public function store(Request $request)
    // {
    //     $donasi = new AddDonasi();
    //     $donasi->judul = $request->input('nama');
    //     $donasi->target = $request->input('target');
    //     $donasi->awal = $request->input('awal');
    //     $donasi->akhir = $request->input('akhir');
    //     // Lakukan pengolahan file gambar jika diperlukan
    //     if ($request->hasFile('gambar')) {
    //         $gambarPath = $request->file('gambar')->store('public/gambar');
    //         $gambarUrl = asset('storage/' . str_replace('public/', '', $gambarPath));
    //         $donasi->gambar = Storage::url($gambarUrl);
    //     }
    //     $donasi->metode = $request->input('metode');
    //     $donasi->save();

    //     return redirect('/admin/tambahdonasi')->with('success', 'Donasi berhasil ditambahkan.');
    // }

    public function setuptambahdonasi()
    {
        return view('admin.tambahdonasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'target' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'metode' => 'required',
        ]);

        $gambarPath = $request->file('gambar')->store('public/gambar');
        $gambarUrl = asset('storage/' . str_replace('public/', '', $gambarPath));

        $tambahDonasi = [
            'judul' => $request->judul,
            'target' => $request->target,
            'awal' => $request->awal,
            'akhir' => $request->akhir,
            'gambar' => $gambarUrl,
            'metode' => $request->metode,
        ];

        addDonasi::create($tambahDonasi);

        
        return view('admin.tambahdonasi')->with('success', 'Donasi berhasil ditambahkan.');
        // return redirect()->route('setupadmin.tambahruang')->with('success', 'Ruangan berhasil ditambahkan.');
    }
}
