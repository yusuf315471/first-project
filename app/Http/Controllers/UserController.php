<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	// if (Auth::user()->id === 1){
    	$user = \App\user::all();
    	return view('/User.index',['user'=>$user]);
    }
    public function edit($id)
    {
    	$user = \App\user::find($id);
    	return view('/user/edit',['user'=>$user]);
    }
    public function updatepassword(Request $request, $id)
    {

 		$user = \App\user::find($id);
    	$user->update(['password' => bcrypt($request->password)]);
    	// dd($user);
        return ($user) ? redirect('/user')->with('success',$request->name. ' Berhasil di ubah') : "gagal";
    }
    public function updatelevel(Request $request, $id)
    {

 		$user = \App\user::find($id);
    	$user->update(['No_Hp' =>$request->No_Hp,'level'=> $request->level]);
    	// dd($user);
        return ($user) ? redirect('/user')->with('success',$request->name. ' Berhasil di ubah') : "gagal";
    }
    public function delete($id)
    {
    	$user = \App\user::find($id);
    	$user->delete();
    	return redirect('/user')->with('success',$user->name . ' dihapus');

    }
}
