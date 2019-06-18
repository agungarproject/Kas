<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table ='pembelians';
    protected $fillabel = [
    	'notrans',
    	'nama',
    	'suplier',
    	'harga',
    	'quantity',
    	'total'
    ];

}
