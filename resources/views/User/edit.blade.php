@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-12">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit password</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
		<div class="container">
			<form action="/user/{{$user->id}}/updatepassword" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="email">email</label> <span><u>{{$user->email}}</u></span>
			  </div>
			  <div class="form-group">
			    <label for="password">password</label>
			    <input name="password" value="{{$user->password}}" type="text" class="form-control" >
			  </div>
			  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
			</form>
		</div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row">
  <div class="col-12">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit level</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
		<div class="container">
			<form action="/user/{{$user->id}}/updatelevel" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			  	<label for="No_hp">No hp</label>
			  	<input name="No_hp" value="{{$user->No_Hp}}" type="text"  class="form-control">
			  </div>
			  <div class="form-group form-select">
			  	<label for="agama">level</label>
			    <select class="form-control" name="level">
			    	<option @if($user->level == 'client') selected @endif>client</option>
			    	<option @if($user->level == 'admin') selected @endif>admin</option>
			    </select>
			  </div>
			  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
			</form>
		</div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection