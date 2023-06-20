<?php

namespace App\Http\Controllers;

use App\Models\addDonasi;
use App\Models\DonationUser;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donate(Request $request)
    {
        // dd($request);
        $gmbr = addDonasi::find($request->id)->toArray();

        // dd($gmbr['gambar']);
        $gbr=$gmbr['gambar'];
        // Lakukan logika untuk menentukan nilai $approved (misalnya, jika donasi sudah diapprove, set $approved menjadi 1)
        $donationUser = DonationUser::create([
            'donation_id' => $request->id,
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'jmldonasi' => $request->jmldonasi,
            'approved' => 0,
            'gambar'=>$gbr
        ]);


        // Lakukan tindakan selanjutnya jika perlu

        return redirect('/home')->with('success', 'Donation successful!');
    }

    public function donatenew($id){
        return view('donate', compact('id'));

    }
}
