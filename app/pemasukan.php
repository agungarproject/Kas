<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
     protected $table ='pemasukans';
    protected $fillabel = [
    	'notrans',
    	'tanggal',
    	'jenis',
    	'total',
    	'keterangan'	
    ];
}
