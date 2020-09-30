@extends('layouts.master')
@section('content')
  <div class="container mt-2">
    
   <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Pesan client</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead class="thead-light">
             <tr>
              <th>nama lengkap</th>
              <th>email belakang</th>
              <th>No Hp</th>
              <th>massage</th>
              <th>date</th>
              <th>action</th>
            </tr>
            </thead>
          @foreach($pesan as $p)
           <tr>
            <td>{{$p->nama_lengkap}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->No_Hp}}</td>
            <td>{{$p->massage}}</td>
            <td>{{$p->created_at}}</td>
            <td><a href="/pesan/{{$p->id}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
          
        </table>
      </div>  
  </div>
</div>
</div>
</div>
@endsection