<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected	$table = 'inventaris';
    protected	$fillable = ['nama','kondisi','keterangan','jumlah','id_jenis','tanggal_register','id_ruang','kode_inventaris','id_petugas'];
    protected	$primaryKey = 'id_inventaris';
}
