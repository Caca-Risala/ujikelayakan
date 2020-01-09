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
          <form action="/peminjaman/{$peminjaman->id_peminjaman}/update" method="POST">
                    {{csrf_field()}}
                  <div class="form-group">
                <label for="exampleInputEmail1">Id Peminjaman</label>
                <input  name="id_peminjaman" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id peminjaman" value="{{$peminjaman->id_peminjaman}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Pinjam</label>
                <input name="tanggal_pinjam" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pinjam" value="{{$peminjaman->tanggal_pinjam}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Kembali</label>
                <input name="tanggal_kembali" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kembali" value="{{$peminjaman->tanggal_kembali}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="{{$peminjaman->keterangan}}">
                </div>


                <div class="form-group">
                <label for="exampleInputEmail1">Status Peminjaman</label>
                <input name="status_peminjaman" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status Peminjaman" value="{{$peminjaman->status_peminjaman}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Id Pegawai</label>
                <input name="id_pegawai" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Pegawai" value="{{$peminjaman->id_pegawai}}">
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