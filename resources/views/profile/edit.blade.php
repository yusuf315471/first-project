@extends('layouts.master')
@section('content')
 	<div class="row">
	  <div class="col-md-12">
	    <div class="card card-warning">
	      <div class="card-header">
	        <h3 class="card-title"><i class="fa fa-address-card">  </i>  Edit Profile</h3>
	      </div>
	      <div class="card-body">
	      	<form action="/profile/{{$profile->id}}/upload" method="POST">
	      		
	      		{{csrf_field()}}

	        <!-- phone mask -->
	        <div class="form-group"> 
	          <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text"><i class="fas fa-chart-bar"></i></span>
	            </div>
	            <input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan" value="{{$profile->pekerjaan}}">
	          </div>
	          <!-- /.input group -->
	        </div>
	        <div class="form-group"> 
	          <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
	            </div>
	            <input name="alamat" type="text" class="form-control" placeholder="alamat" value="{{$profile->alamat}}">
	          </div>
	          <!-- /.input group -->
	        </div>
	        <!-- /.form group -->
	        <!-- Date mm/dd/yyyy -->
	        <div class="form-group">
	          <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
	            </div>
	            <input type="Date" name="tgl_lahir" class="form-control" placeholder="tanggal lahir" value="{{$profile->tgl_lahir}}">
	          </div>
	          <!-- /.input group -->
	        </div>
	        <!-- /.form group -->

	        <!-- phone mask -->
	        <div class="form-group">

	          <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
	            </div>
	            <input type="text" class="form-control" name="status" placeholder="status" value="{{$profile->status}}">
	          </div>
	          <!-- /.input group -->
	        </div>
	        <div class="form-group">

	          <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text"><i class="fas fa-tag"></i></span>
	            </div>
	            <input type="text" class="form-control" name="bagian" placeholder="bagian" value="{{$profile->bagian}}">
	          </div>
	          <!-- /.input group -->
	        </div>
	        <!-- /.form group -->

	        <!-- IP mask -->
	        <div class="form-group">
	          <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text"><i class="fas fa-book"></i></span>
	            </div>
	            <input type="text" class="form-control" name="bio" placeholder="bio" value="{{$profile->bio}}">
	          </div>
	          <!-- /.input group -->
	        </div>
	        <!-- /.form group -->
	        	<button class="btn btn-sm btn-primary">simpan</button>
	      	</form>
	      </div>
	      <!-- /.card-body -->
	    </div>

	  </div>
  </div>
@endsection