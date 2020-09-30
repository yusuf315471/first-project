@extends('layouts.master')
@section('content')
	<div class="col-8 offset-2 mt-2">
      <div class="card bg-light">
        <div class="card-header text-muted border-bottom-0">
          Digital Strategist
        </div>
        <div class="card-body pt-0">
          <div class="row">
            <div class="col-7">
              <h1 class="lead"><b>{{Auth::user()->name}}</b></h1>
              <p class="text-muted text-sm"><b>Bagian: </b> {{$profile->bagian}}</p>
	            <table class="table">
	              <ul class="ml-4 mb-0 fa-ul text-muted">
	                <!-- <li class="medium">      	 -->
	                	<span class="fa-li">
			              	<tr>
			              		<td><i class="fas fa-lg fa-building"></i></td>
			              		<td>pekerjaan</td>
			              		<td>:</td>
			              		<td>{{$profile->pekerjaan}}</td>
			              	</tr>
	                	</span>
		             <!-- </li> -->
	                <!-- <li class="medium">      	 -->
	                	<span class="fa-li">
			              	<tr>
			              		<td><i class="fas fa-lg fa-phone"></i></td>
			              		<td>phone</td>
			              		<td>:</td>
			              		<td>{{$user->No_Hp}}</td>
			              	</tr>
	                	</span>
		             <!-- </li> -->
	                <!-- <li class="medium">      	 -->
	                	<span class="fa-li">
			              	<tr>
			              		<td><i class="fas fa-lg fa-map-marker-alt"></i></td>
			              		<td>alamat</td>
			              		<td>:</td>
			              		<td>{{$profile->alamat}}</td>
			              	</tr>
	                	</span>
		             <!-- </li> -->
	                <!-- <li class="medium">      	 -->
	                	<span class="fa-li">
			              	<tr>
			              		<td><i class="fas fa-lg fa-calendar-alt"></i></td>
			              		<td>tgl_lahir</td>
			              		<td>:</td>
			              		<td>{{$profile->tgl_lahir}}</td>
			              	</tr>
	                	</span>
		             <!-- </li> -->
	                <!-- <li class="medium">      	 -->
	                	<span class="fa-li">
			              	<tr>
			              		<td><i class="fas fa-lg fa-pencil-alt"></i></td>
			              		<td>status</td>
			              		<td>:</td>
			              		<td>{{$profile->status}}</td>
			              	</tr>
	                	</span>
		             <!-- </li> -->
	                <!-- <li class="medium">      	 -->
	                	<span class="fa-li">
			              	<tr>
			              		<td><i class="fas fa-lg fa-book"></i></td>
			              		<td>bio</td>
			              		<td>:</td>
			              		<td>{{$profile->bio}}</td>
			              	</tr>
	                	</span>
		             <!-- </li> -->
		         </ul>
	            </table>
            </div>
            <div class="col-5 text-center">
              <img src="{{$profile->avatar}}" alt="" class="img-circle img-fluid">
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="text-right">
            <a href="#" class="btn btn-sm bg-teal">
              <i class="fas fa-comments"></i>
            </a>
            <a href="/profile/{{$user->id_profile}}/edit" class="btn btn-sm btn-primary">
              <i class="fas fa-user"></i> Edit Profile
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection