<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customer';
    public $timestamps=false;
    public function bill()
    {
        return $this->hasMany('App\bill','id_customer','id');
    }
}
