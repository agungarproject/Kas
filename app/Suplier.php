<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table ='supliers';
    protected $fillabel = [
    	'nama',
    	'notelp',
    	'email',
    	'alamat'
    ];
}
