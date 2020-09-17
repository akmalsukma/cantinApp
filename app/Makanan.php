<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = [
        'id_makanan','nama_makanan' , 'harga','status'
    ];
}
