@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Inventaris</h3>
					<div class="right">
						<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class=" btn btn-primay lnr lnr-plus-circle"> Tambah Data Inventaris </i></button>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID INVENTARIS</th>
								<th>NAMA</th>
								<th>KONDISI</th>
								<th>KETERANGAN</th>
								<th>JUMLAH</th>
								<th>ID JENIS</th>
								<th>TANGGAL REGISTER</th>
								<th>ID RUANG</th>
								<th>KODE INVENTARIS</th>
								<th>ID PETUGAS</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_inventaris as $inventaris)
							<tr>
								<td>{{$inventaris->id_inventaris}}</td>
						 		<td>{{$inventaris->nama}}</td>
								<td>{{$inventaris->kondisi}}</td>
								<td>{{$inventaris->keterangan}}</td>
								<td>{{$inventaris->jumlah}}</td>
								<td>{{$inventaris->id_jenis}}</td>
								<td>{{$inventaris->tanggal_register}}</td>
								<td>{{$inventaris->id_ruang}}</td>
								<td>{{$inventaris->kode_inventaris}}</td>
								<td>{{$inventaris->id_petugas}}</td>
								<td>
									<a href="/inventaris/{{$inventaris->id_inventaris}}/edit" class="btn btn-primary">Edit</a>
									<a href="/inventaris/{{$inventaris->id_inventaris}}/delete" class="btn btn-danger"onclick="return confirm('Yakin Mau Dihapus ?')">Delete</a>
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
        					<form action="/inventaris/create" method="POST">
        						{{csrf_field()}}
  								<div class="form-group">
    						<label for="exampleInputEmail1">Id Inventaris</label>
    						<input  name="id_inventaris" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Inventaris">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Nama</label>
    						<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Kondisi</label>
    						<input name="kondisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kondisi">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Keterangan</label>
    						<input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Jumlah</label>
    						<input name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Id Jenis</label>
    						<input name="id_jenis" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Jenis">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Tanggal Register</label>
    						<input name="tanggal_register" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Register">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Id Ruang</label>
    						<input name="id_ruang" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Ruang">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Kode Inventaris</label>
    						<input name="kode_inventaris" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Inventaris">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Id Petugas</label>
    						<input name="id_petugas" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Petugas">
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