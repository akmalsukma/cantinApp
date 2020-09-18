<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = [
        'id','nama_makanan' , 'harga','status'
    ];

    public function order()
    {
        return $this->hasMany('App\Order','id_makanan','id');
    }
}
