<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function read_pembayaran(){
        $pembayaran = DB::table('pembayaran')->get();
        return view('read-pembayaran',['pembayaran' => $pembayaran]);
    }

    public function input_pembayaran(){
        return view('input-pembayaran');
    }

    public function store_pembayaran(Request $request){
	    DB::table('pembayaran')->insert([
        'pembayaran_id' => $request->id,
        'pemesanan_id' => $request->pemesanan_id,
        'pembayaran_tanggal' => $request->tanggal,
        'pembayaran_total' => $request->total]);
        return redirect('/pembayaran/read-pembayaran');
    }

    public function edit_pembayaran($id){
        $pembayaran = DB::table('pembayaran')->where('pembayaran_id',$id)->get();
	    return view('edit-pembayaran',['pembayaran' => $pembayaran]);
    }

    public function update_pembayaran(Request $request){
	    DB::table('pembayaran')->where('pembayaran_id',$request->id)->update([
        'pembayaran_id' => $request->id,
        'pemesanan_id' => $request->pemesanan_id,
        'pembayaran_tanggal' => $request->tanggal,
        'pembayaran_total' => $request->total]);
        return redirect('/pembayaran/read-pembayaran');
    }

    public function delete_pembayaran($id){
	    DB::table('pembayaran')->where('pembayaran_id',$id)->delete();
        return redirect('/pembayaran/read-pembayaran');
    }

    public function cetak_pdf()
    {
        $pembayaran = DB::table('pembayaran')->get();
        $pdf = \PDF::loadview('pdf-pembayaran',['pembayaran'=>$pembayaran]);
        $pdf->setPaper('A4', 'landscape');
    	return $pdf->stream();
    }


}