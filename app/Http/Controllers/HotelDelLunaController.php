<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelDelLunaController extends Controller
{
	
	public function petugas_login(){
		return view('auth.login');
	}


	public function logout(){
        Auth::logout();
		return redirect('/');
	}
	

	public function home_pelanggan(){
		return view('pelanggan.home');
	}

	public function home_room(){
		return view('pelanggan.room');
	}
}