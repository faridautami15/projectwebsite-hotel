<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller{
    
    public function read_petugas(){
    
        $petugas = DB::table('petugas')->get();
        return view('read-petugas',['petugas' => $petugas]);
    }

    public function input_petugas(){
        return view('input-petugas');
    }

    public function store_petugas(Request $request){
	    DB::table('petugas')->insert([
        'petugas_id' => $request->id,
        'petugas_nama' => $request->nama,
		'petugas_alamat' => $request->alamat,
        'petugas_jk' => $request ->jk,
        'petugas_notelp' => $request->notelp]);
        return redirect('/petugas/read-petugas');
    }

    public function edit_petugas($id){
        $petugas = DB::table('petugas')->where('petugas_id',$id)->get();
	    return view('edit-petugas',['petugas' => $petugas]);
    }

    public function update_petugas(Request $request){
	    DB::table('petugas')->where('petugas_id',$request->id)->update([
        'petugas_id' => $request->id,
        'petugas_nama' => $request->nama,
		'petugas_alamat' => $request->alamat,
        'petugas_jk' => $request ->jk,
        'petugas_notelp' => $request->notelp]);
        return redirect('/petugas/read-petugas');
    }

    public function delete_petugas($id){
	    DB::table('petugas')->where('petugas_id',$id)->delete();
        return redirect('/petugas/read-petugas');
    }

    public function cari_petugas(Request $request){
		$cari = $request->cari;
		$petugas = DB::table('petugas')
		->where('petugas_nama','like',"%".$cari."%")
		->get();
        return view('read-petugas',['petugas' => $petugas]);
    }

    public function cetak_pdf()
    {
        $petugas = DB::table('petugas')->get();
        $pdf = \PDF::loadview('pdf-petugas',['petugas'=>$petugas]);
        $pdf->setPaper('A4', 'landscape');
    	return $pdf->stream();
    }

    


}