<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id','id_user' ,'id_makanan' ,'tanggal', 'jumlah_pesan','status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id_user','id');
    }

    public function makanan()
    {
        return $this->belongsTo('App\Makanan','id_makanan','id');
    }

}
