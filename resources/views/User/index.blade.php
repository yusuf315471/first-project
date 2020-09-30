@extends('layouts.master')
@section('content')
  <div class="container mt-2">
    
   <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>user</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover" style="word-wrap: break-word; ">
            <thead class="thead-light">
             <tr>
              <th>Nama</th>
              <th>email</th>
              <th>No Hp</th>
              <!-- <th>password</th> -->
              <th>date</th>
              <th>level</th>
              <th>action</th>
            </tr>
            </thead>
          @foreach($user as $p)
           <tr>
            <td>{{$p->name}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->No_Hp}}</td>
            <!-- <td style="width: 30px ">{{$p->password}}</td> -->
            <td>{{$p->created_at}}</td>
            <td>{{$p->level}}</td>
            <td>
              <a href="/user/{{$p->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
              <a href="/user/{{$p->id}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
          
        </table>
      </div>  
  </div>
</div>
</div>
</div>
@endsection