<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table='products';
    public $timestamps=false;
    public function products()
    {
        //một loại sản phẩm thuộc một loại sản phẩm nào đó
        // sử dụng belongsTo
        return $this->belongsTo('App\loaisanpham','id_type','id');
        //id của sản phẩm
        


    }
}
