<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('cari')) {
    	$data_Pasien = \App\pasien::where('nama_depan','LIKE','%'.$request->cari.'%')->get();		
    	}
    	else{
    	$data_Pasien = \App\pasien::all();
    	}
    	return view('pasien.index',['data_pasien' => $data_Pasien]);
    }
    public function create(Request $request)
    {
    	if($data = \App\pasien::create($request->all())){
    		return redirect('/pasien')->with('success','Pasien di Tambah');
    	}
    	return view('/pasien');
    }
    public function edit($id)
    {
    	$pasien = \App\pasien::find($id);
    	return view('/pasien/edit',['pasien'=>$pasien]);
    }
    public function update(Request $request,$id)
    {
 		$pasien = \App\pasien::find($id);
 		$pasien->update($request->all());
 		return redirect('/pasien')->with('success', $pasien->nama_depan.' di ganti');
    }
    public function delete($id)
    {
    	$pasien = \App\pasien::find($id);
    	$pasien->delete();
    	return redirect('/pasien')->with('success',$pasien->nama_depan . ' dihapus');

    }	
}
