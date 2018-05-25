<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'tb_ruang';

    protected $fillable = [
        'kode_ruangan','nama_ruangan', 'jumlah','keterangan',
    ];

    protected $hidden = ['remember_token'];

}
