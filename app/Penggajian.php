<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    protected $table ='penggajians';
    protected $fillabel = [
    	'notrans',
    	'periode',
    	'total',
    	'keterangan'
    	];

}
