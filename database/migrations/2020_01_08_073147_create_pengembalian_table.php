<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->Increments('id_pengembalian');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('keterangan');
            $table->string('status_pengembalian');
            $table->string('id_pegawai');
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
        Schema::dropIfExists('pengembalian');
    }
}
