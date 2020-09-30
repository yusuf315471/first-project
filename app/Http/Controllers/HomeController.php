<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pesan(Request $request)
    {
    	$pesan = \App\contact_user::create($request->all());
    	return ($pesan) ? redirect('/')->with('success', ' pesan terkirim') : "gagal";
   }
   public function Info()
   {
   	return view('/RS');
   }
}
