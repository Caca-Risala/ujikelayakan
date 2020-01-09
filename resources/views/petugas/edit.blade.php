@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
      <div class="fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Inputs</h3>
        </div>
        <div class="panel-body">
          <form action="/petugas/{$petugas->id_petugas}/update" method="POST">
                    {{csrf_field()}}
                  <div class="form-group">
                <label for="exampleInputEmail1">Id Petugas</label>
                <input  name="id_petugas" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Petugas" value="{{$petugas->id_petugas}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" value="{{$petugas->username}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" value="{{$petugas->password}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Nama Petugas</label>
                <input name="nama_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Petugas" value="{{$petugas->nama_petugas}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Id Level</label>
                <input name="id_level" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Level" value="{{$petugas->id_level}}">
                </div> 

                <button type="submit" class="btn btn-warning">Update</button>
                  </form>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@stop