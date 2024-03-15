<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as ForPenduduk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Penduduk extends Model implements ForPenduduk
{
    use Authenticatable , HasFactory;
    
    protected $fillable = [
        'nik', 'nama', 'password' , 'role'
    ];
    protected $hidden = [
        'password' , 'remember_token',
    ];
}
