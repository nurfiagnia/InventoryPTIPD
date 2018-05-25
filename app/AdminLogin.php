<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminLogin extends Authenticatable
{
    use Notifiable;

    protected $table='admin';

    protected $fillable = [
        'nama','jeniskelamin', 'username', 'password'];

    protected $hidden = [
        'password', 'remember_token'];
}
