<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{

    protected $table='tb_barang';

    protected $fillable = [
        'kode_barang','nama_barang', 'stok','jumlah',
    ];

    protected $hidden = ['remember_token'];

}
