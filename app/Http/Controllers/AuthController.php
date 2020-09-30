<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function index()
    {
    	return view('/Auths/login');
    }
    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('email','password'))){
    		if (Auth::user()->level == 'client') {
    	       return redirect('/login')->with('gagal','Anda belum menjadi admin');
            }
            return redirect('/dashboard');
    	}
        return redirect('/login')->with('gagal','password atau email salah');
    }
    public function register()
    {
        return view('/Auths.Register');
    }
    public function adduser(Request $request)
    {
        if( $request->password  != $request->confirm){
            return redirect('/register')->with('gagal','retype password harus sama!');
        }
        $id = DB::table('profile')->insertGetId([
            'avatar'    => '',
            'pekerjaan' => '',
            'alamat'    => '',
            'status'    => '',
            'bagian'    => '',
            'bio'       => '',
             ]);
        $user = \App\User::create([
            'name'       => $request->name,
            'password'   => bcrypt($request->password),
            'id_profile' => $id,
            'email'      => $request->email,
            'No_Hp'      =>$request->No_Hp,
            'level'      =>$request->level
        ]);
        return ($user) ? redirect('/login')->with('success',$request->name. ' Berhasil di tambahkan') : "gagal";
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
