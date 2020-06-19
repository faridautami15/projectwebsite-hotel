<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function read_pemesanan(){
        $pemesanan = DB::table('pemesanan')->get();
        return view('read-pemesanan',['pemesanan' => $pemesanan]);
    }

    public function input_pemesanan(){
        $pemesanan =  DB::table('pemesanan')
                        ->join('pelanggan','pelanggan.PELANGGAN_ID','=','pemesanan.PELANGGAN_ID')
                        ->join('petugas','petugas.PETUGAS_ID','=','pemesanan.PETUGAS_ID')
                        ->join('kamar','kamar.KAMAR_ID','=','pemesanan.KAMAR_ID')
                        ->get();
                        dd($pemesanan);
        return view('input-pemesanan',['pemesanan'=>$pemesanan]);
    }

   
    public function store_pemesanan(Request $request){ 
            DB::table('pemesanan')->insert([
            'pemesanan_id' => $request->id,
            'pelanggan_id' => $request->pelanggan_id,
            'petugas_id' => $request->petugas_id,
            'kamar_id' => $request->kamar_id,
            'pemesanan_checkin' => $request->checkin,
            'pemesanan_checkout' => $request->checkout]);
            return redirect('/pemesanan/read-pemesanan');
    }

    public function edit_pemesanan($id){
        $pemesanan = DB::table('pemesanan')->join('pelanggan','pelanggan.PELANGGAN_ID','=','pemesanan.PELANGGAN_ID')
        ->join('petugas','petugas.PETUGAS_ID','=','pemesanan.PETUGAS_ID')->join('kamar','kamar.KAMAR_ID','=','pemesanan.KAMAR_ID')->where('pemesanan_id',$id)->get();
	    return view('edit-pemesanan',['pemesanan' => $pemesanan]);
    }

    public function update_pemesanan(Request $request){
	    DB::table('pemesanan')->where('pemesanan_id',$request->id)->update([
            'pemesanan_id' => $request->id,
            'pelanggan_id' => $request->PELANGGAN_ID,
            'petugas_id' => $request->PETUGAS_ID,
            'pemesanan_checkin' => $request->checkin,
            'pemesanan_checkout' => $request->checkout]);
        return redirect('/pemesanan/read-pemesanan');
    }

    public function delete_pemesanan($id){
	    DB::table('pemesanan')->where('pemesanan_id',$id)->delete();
        return redirect('/pemesanan/read-pemesanan');
    }

    public function cetak_pdf()
    {
        $pemesanan = DB::table('pemesanan')->get();
        $pdf = \PDF::loadview('pdf-pemesanan',['pemesanan'=>$pemesanan]);
        $pdf->setPaper('A4', 'landscape');
    	return $pdf->stream();
    }


}