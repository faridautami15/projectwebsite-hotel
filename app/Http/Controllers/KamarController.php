<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function read_kamar(){
        $kamar = DB::table('kamar')->get();
        return view('read-kamar',['kamar' => $kamar]);
    }

    public function input_kamar(){
        return view('input-kamar');
    }

    public function store_kamar(Request $request){
        if($request -> KAMAR_JENIS  == "Single Room"){
            $harga = 3000000;
            $deskripsi = "Single Bed(1), Bathroom(1), Sofa, TV";
        }
        elseif($request -> KAMAR_JENIS == "Twin Room"){
            $harga = 6000000;
            $deskripsi = "Single Bed(2), Bathroom(1), Sofa, TV";
        }
        elseif($request -> KAMAR_JENIS == "Triple Room"){
            $harga = 9000000;
            $deskripsi = "Single Bed(2), Double Bed(1), Bathroom(2), Sofa, TV";
        }
        elseif($request -> KAMAR_JENIS == "Standart Room"){
            $harga = 7500000;
            $deskripsi = "Double Bed(1), Bathroom(1), Dinning Room, Sofa, TV";
        }
        elseif($request -> KAMAR_JENIS == "Superior Room"){
            $harga = 10000000;
            $deskripsi = "Double Bed(1), Bathroom(1) Bathup, Dinning Room, Best View";
        }
        elseif($request -> KAMAR_JENIS == "Deluxe Room"){
            $harga = 15000000;
            $deskripsi = "Double Bed(1), Bathroom(2) Bathup, Dinning Room, Living Room, Best View";
        }
	    DB::table('kamar')->insert([
        'kamar_id' => $request->KAMAR_ID,
		'kamar_jenis' => $request->KAMAR_JENIS,
        'kamar_deskripsi' => $deskripsi,
        'kamar_harga' => $harga]);
        return redirect('/kamar/read-kamar');
    }

    public function edit_kamar($id){
        $kamar = DB::table('kamar')->where('kamar_id',$id)->get();
	    return view('edit-kamar',['kamar' => $kamar]);
    }

    public function update_kamar(Request $request){
        if($request -> KAMAR_JENIS == "Single Room"){
            $harga = 3000000;
            $deskripsi = "Single Bed(1), Bathroom(1), Sofa, TV";
        }
        elseif($request -> KAMAR_JENIS == "Twin Room"){
            $harga = 6000000;
            $deskripsi = "Single Bed(2), Bathroom(1), Sofa, TV";
        }
        elseif($request -> KAMAR_JENIS == "Triple Room"){
            $harga = 9000000;
            $deskripsi = "Single Bed(2), Double Bed(1), Bathroom(2), Sofa, TV";
        }
        elseif($request -> KAMAR_JENIS == "Standart Room"){
            $harga = 7500000;
            $deskripsi = "Double Bed(1), Bathroom(1), Dinning Room";
        }
        elseif($request -> KAMAR_JENIS == "Superior Room"){
            $harga = 10000000;
            $deskripsi = "Double Bed(1), Bathroom(1) Bathup, Dinning Room, Best View";
        }
        if($request -> KAMAR_JENIS == "Deluxe Room"){
            $harga = 15000000;
            $deskripsi = "Double Bed(1), Bathroom(2) Bathup, Dinning Room, Living Room, Best View";
        }
	    DB::table('kamar')->where('KAMAR_ID',$request->KAMAR_ID)->update([
        'kamar_id' => $request->KAMAR_ID,
        'kamar_jenis' => $request->KAMAR_JENIS,
        'kamar_deskripsi' => $deskripsi,
        'kamar_harga' => $harga]);
        return redirect('/kamar/read-kamar');
    }

    public function delete_kamar($id){
	    DB::table('kamar')->where('kamar_id',$id)->delete();
        return redirect('/kamar/read-kamar');
    }

    public function cetak_pdf()
    {
        $kamar = DB::table('kamar')->get();
        $pdf = \PDF::loadview('pdf-kamar',['kamar'=>$kamar]);
        $pdf->setPaper('A4', 'landscape');
    	return $pdf->stream();
    }

}