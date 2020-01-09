@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Petugas</h3>
					<div class="right">
						<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class=" btn btn-primay lnr lnr-plus-circle"> Tambah Data Petugas </i></button>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID PETUGAS</th>
								<th>USERNAME</th>
								<th>PASSWORD</th>
								<th>NAMA PETUGAS</th>
								<th>ID LEVEL</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_petugas as $petugas)
							<tr>
								<td>{{$petugas->id_petugas}}</td>
						 		<td>{{$petugas->username}}</td>
								<td>{{$petugas->password}}</td>
								<td>{{$petugas->nama_petugas}}</td>
								<td>{{$petugas->id_level}}</td>
								<td>
									<a href="/petugas/{{$petugas->id_petugas}}/edit" class="btn btn-primary">Edit</a>
									<a href="/petugas/{{$petugas->id_petugas}}/delete" class="btn btn-danger"onclick="return confirm('Yakin Mau Dihapus ?')">Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
					</div>	
				</div>
			</div>		
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  					<div class="modal-dialog" role="document">
		    					<div class="modal-content">
		      						<div class="modal-header">
		        						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		         	 						<span aria-hidden="true">&times;</span>
		        						</button>
      						</div>
      						<div class="modal-body">
        					<form action="/petugas/create" method="POST">
        						{{csrf_field()}}
  								<div class="form-group">
    						<label for="exampleInputEmail1">Id Petugas</label>
    						<input  name="id_petugas" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Petugas">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Username</label>
    						<input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Password</label>
    						<input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Nama Petugas</label>
    						<input name="nama_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Petugas">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Id Level</label>
    						<input name="id_level" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Level">
  							</div>
							
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        						<button type="submit" class="btn btn-primary">Simpan</button>
        						</form>
      						</div>
    					</div>
  					</div>
@stop