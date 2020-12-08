<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table='bills';
    public $timestamps=false;
    public function bill_detail()
    {
        return $this->hasMany('App\bill_detail','id_bill','id');
    }
    public function customer()
    {
        return $this->hasMany('App\customer','id_customer','id');
    }
}
