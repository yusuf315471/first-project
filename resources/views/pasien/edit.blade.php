@extends('layouts.master')
@section('content')

	<div class="container">
		<form action="/pasien/{{$pasien->id}}/update" method="POST">
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="nama_depan">Nama Depan</label>
		    <input name="nama_depan" value="{{$pasien->nama_depan}}" type="text" class="form-control" id="nama_depan">
		  </div>
		  <div class="form-group">
		    <label for="nama_belakang">Nama Belakang</label>
		    <input name="nama_belakang" value="{{$pasien->nama_belakang}}" type="text" class="form-control" id="nama_Belakang">
		  </div>
		  <div class="form-group">
		  	<label for="alamat">Alamat</label>
		  	<input name="alamat" value="{{$pasien->alamat}}" type="text" name="alamat" value="{{$pasien->alamat}}" placeholder="Masukan Alamat" class="form-control">
		  </div>
		  <div class="form-group form-select">
		  	<label for="agama">Agama</label>
		    <select class="form-control" name="agama" value="{{$pasien->agama}}">
		    	<option>Islam</option>
		    	<option>Kristen</option>
		    	<option>Budha</option>
		    	<option>Hindu</option>
		    	<option>DLL</option>
		    </select>
		  </div>
		  <div class="form-group">
		  	<label for="jenis_kelamin">jenis kelamin</label>
		    <input type="radio" class="form-radio-input" value="Laki-Laki" name="jenis_kelamin"> Laki-Laki
		    <input type="radio" class="form-radio-input" value="Perempuan" name="jenis_kelamin"> Perempuan
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection