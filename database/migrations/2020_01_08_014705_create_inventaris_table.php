<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->Increments('id_inventaris');
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->string('jumlah');
            $table->string('id_jenis');
            $table->date('tanggal_register');
            $table->string('id_ruang');
            $table->string('kode_inventaris');
            $table->string('id_petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
