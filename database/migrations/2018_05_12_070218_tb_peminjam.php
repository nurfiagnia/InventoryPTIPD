<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPeminjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peminjam', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('barang_id'); //foreign key id barang
            $table->unsignedInteger('ruang_id'); //foreign key id ruangan
            $table->string('jumlah');
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('tb_peminjam', function(Blueprint $kolom) {
            $kolom->foreign('barang_id')->references('id')->on('tb_barang')->onDelete('cascade')->onUpdate('cascade');
            $kolom->foreign('ruang_id')->references('id')->on('tb_ruang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_peminjam');
    }
}
