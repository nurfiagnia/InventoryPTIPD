<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbRuang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tb_ruang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_ruangan');
            $table->string('nama_ruangan');
            $table->string('jumlah');
            $table->string('keterangan');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_ruang');
    }
}
