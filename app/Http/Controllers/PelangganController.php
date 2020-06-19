<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function read_pelanggan(){
        $pelanggan = DB::table('pelanggan')->get();
        return view('read-pelanggan',['pelanggan' => $pelanggan]);
    }

    public function input_pelanggan(){
        return view('input-pelanggan');
    }

    public function store_pelanggan(Request $request){
	    DB::table('pelanggan')->insert([
        'pelanggan_id' => $request->id,
        'pelanggan_noktp' => $request->noktp,
        'pelanggan_nama' => $request->nama,
		'pelanggan_alamat' => $request->alamat,
        'pelanggan_jk' => $request->jk,
        'pelanggan_email'=> $request->email,
        'pelanggan_notelp' => $request->notelp,
        'jeniskamar' => $request->kamar,
        'check_in' => $request->checkin,
        'check_out' => $request->checkout]);
        return redirect('/pelanggan/upload');
    }

    public function edit_pelanggan($id){
        $pelanggan = DB::table('pelanggan')->where('pelanggan_id',$id)->get();
	    return view('edit-pelanggan',['pelanggan' => $pelanggan]);
    }

    public function update_pelanggan(Request $request){
	    DB::table('pelanggan')->where('pelanggan_id',$request->id)->update([
        'pelanggan_id' => $request->id,
        'pelanggan_noktp' => $request->noktp,
        'pelanggan_nama' => $request->nama,
		'pelanggan_alamat' => $request->alamat,
        'pelanggan_jk' => $request->jk,
        'pelanggan_email'=> $request->email,
        'pelanggan_notelp' => $request->notelp,
        'jeniskamar' => $request->kamar,
        'check_in' => $request->checkin,
        'check_out' => $request->checkout]);
        return redirect('/pelanggan/read-pelanggan');
    }

    public function delete_pelanggan($id){
	    DB::table('pelanggan')->where('pelanggan_id',$id)->delete();
        return redirect('/pelanggan/read-pelanggan');
    }

    public function cari_pelanggan(Request $request){
		$cari = $request->cari;
		$pelanggan = DB::table('pelanggan')
		->where('pelanggan_nama','like',"%".$cari."%")
		->get();
		return view('read-pelanggan',['pelanggan' => $pelanggan]);
 
    }
    public function cari_reservasi(Request $request){
		$cari = $request->cari;
		$pelanggan = DB::table('pelanggan')
		->where('checkin','like',"%".$cari."%")
		->get();
		return view('read-pelanggan',['pelanggan' => $pelanggan]); 
    }
    
    public function cetak_pdf()
    {
        $pelanggan = DB::table('pelanggan')->get();
        $pdf = \PDF::loadview('pdf-pelanggan',['pelanggan'=>$pelanggan]);
        $pdf->setPaper('A4', 'landscape');
    	return $pdf->stream();
    }
}