<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index()
    {
    	// dd(session());
    	return view('/Dashboard.index');
    }
     public function pesan()
    {
    	// dd(\App\User::find(Auth::user()->id)->id);
    	$pesan = \App\contact_user::all();
    	return view('/pesan.index',['pesan'=>$pesan]);
    }
    public function pesandelete($id)
    {
    	$pesan = \App\contact_user::find($id);
    	$pesan->delete();
    	return redirect('/pesan')->with('success',$pesan->nama_lengkap . ' dihapus');

    }
    public function edit()
    {
    	
    }
}
