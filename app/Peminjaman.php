<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected	$table = 'peminjaman';
    protected	$fillable = ['tanggal_pinjam','tanggal_kembali','keterangan','status_peminjaman','id_pegawai'];
    protected	$primaryKey = 'id_peminjaman';
}
