@extends('layouts.master')
@section('content')
	 <div class="row">
	 	@if(session('success'))
		<div class="alert alert-success" role="alert">
			{{session('success')}}
		</div>
		@endif
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">Tambah pasien</button>
                </h3>

                <div class="card-tools">
                	<form class="form" action="/pasien" method="GET">
	                  <div class="input-group input-group-sm" style="width: 150px;">
	                    <input type="text" name="cari" class="form-control float-right" placeholder="Search">
	                    <div class="input-group-append">
	                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
	                    </div>
	                  </div>
                	</form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                 <tr>
					<th>nama depan</th>
					<th>nama belakang</th>
					<th>jenis kelamin</th>
					<th>agama</th>
					<th>alamat</th>
					<th>Action</th>
				</tr>
				@foreach($data_pasien as $pasien)
				<tr>
					<td>{{$pasien->nama_depan}}</td>
					<td>{{$pasien->nama_belakang}}</td>
					<td>{{$pasien->jenis_kelamin}}</td>
					<td>{{$pasien->agama}}</td>
					<td>{{$pasien->alamat}}</td>
					<td>
						<a href="/pasien/{{$pasien->id}}/edit"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
						<a href="/pasien/{{$pasien->id}}/delete" onclick="return confirm(' yakin di hapus')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
					</td>
				</tr>
				@endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
	<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Penambahan Siswa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div> 
	      <div class="modal-body">
	        <form action="/pasien/create" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group">
			    <label for="nama_depan">Nama Depan</label>
			    <input name="nama_depan" type="text" class="form-control" id="nama_depan">
			  </div>
			  <div class="form-group">
			    <label for="nama_Belakang">Nama Belakang</label>
			    <input name="nama_belakang" type="text" class="form-control" id="nama_Belakang">
			  </div>
			  <div class="form-group">
			  	<label for="alamat">Alamat</label>
			  	<input name="alamat" type="text" name="alamat" placeholder="Masukan Alamat" class="form-control">
			  </div>
			  <div class="form-group form-select">
			  	<label for="agama">Agama</label>
			    <select class="form-control" name="agama">
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
	    </div>
	  </div>
	</div>
@endsection