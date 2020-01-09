<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected	$table = 'pengembalian';
    protected	$fillable = ['tanggal_pinjam','tanggal_kembali','keterangan','status_pengembalian','id_pegawai'];
    protected	$primaryKey = 'id_pengembalian';
}
