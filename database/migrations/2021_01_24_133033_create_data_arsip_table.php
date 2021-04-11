<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataArsipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_arsip', function (Blueprint $table) {
            $table->id();
            $table->string('kode_klarifikasi')->unique();
            $table->string('jenis_arsip');
            $table->string('no_register')->unique();
            $table->year('tahun');
            $table->string('nik');
            $table->string('nama');
            $table->string('uraian');
            $table->string('tgl_input');
            $table->string('petugas');
            $table->string('no_buku');
            $table->string('no_boks');
            $table->string('lokasi');
            $table->string('ket');
            $table->string('lampiran');
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
        Schema::dropIfExists('data_arsip');
    }
}
