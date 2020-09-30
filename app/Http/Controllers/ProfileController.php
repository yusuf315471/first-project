<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
    	$profile = \App\profile::find($id);
    	$user = \App\user::find($id);
    	return view('/profile.index',['user'=>$user,'profile'=>$profile]);
    }
    public function edit($id)
    {
    	$profile = \App\profile::find($id);
    	return view('/profile/edit',['profile'=>$profile]);	
    }
    public function upload($id,Request $request)
    {
    	$profile = \App\profile::find($id);
    	$profile->update(['pekerjaan' =>$request->pekerjaan,'alamat'=> $request->alamat,'tgl_lahir'=> $request->tgl_lahir,'status'=> $request->status,'bagian'=> $request->bagian,'bio'=> $request->bio]);
    	return redirect('/profile/'.$profile->id);
    }
}
