<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table='bill_detail';
    public $timestamps=false;
    public function product()
    {
        return $this->belongsTo('App\products','id_product','id');
    }
    //một bill_detail sẽ thuộc một bill nào đó
    public function bill()
    {
        return $this->belongSTo('App\bill','id_bill','id');
    }
}

