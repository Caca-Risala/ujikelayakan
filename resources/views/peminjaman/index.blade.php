@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Peminjaman</h3>
					<div class="right">
						<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class=" btn btn-primay lnr lnr-plus-circle"> Tambah Data Peminjaman </i></button>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID PEMINJAMAN</th>
								<th>TANGGAL PINJAM</th>
								<th>TANGGAL KEMBALI</th>
								<th>KETERANGAN</th>
								<th>STATUS PEMINJAMAN</th>
								<th>ID PEGAWAI</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_peminjaman as $peminjaman)
							<tr>
								<td>{{$peminjaman->id_peminjaman}}</td>
						 		<td>{{$peminjaman->tanggal_pinjam}}</td>
								<td>{{$peminjaman->tanggal_kembali}}</td>
								<td>{{$peminjaman->keterangan}}</td>
								<td>{{$peminjaman->status_peminjaman}}</td>
								<td>{{$peminjaman->id_pegawai}}</td>
								<td>
									<a href="/peminjaman/{{$peminjaman->id_peminjaman}}/edit" class="btn btn-primary">Edit</a>
									<a href="/peminjaman/{{$peminjaman->id_peminjaman}}/delete" class="btn btn-danger"onclick="return confirm('Yakin Mau Dihapus ?')">Delete</a>
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
        					<form action="/peminjaman/create" method="POST">
        						{{csrf_field()}}
  								<div class="form-group">
    						<label for="exampleInputEmail1">Id Peminjaman</label>
    						<input  name="id_peminjaman" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Peminjaman">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Tanggal Pinjam</label>
    						<input name="tanggal_pinjam" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pinjam">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Tanggal Kembali</label>
    						<input name="tanggal_kembali" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kembali">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Keterangan</label>
    						<input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Status Peminjaman</label>
    						<input name="status_peminjaman" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status Peminjaman">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Id Pegawai</label>
    						<input name="id_pegawai" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Pegawai">
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