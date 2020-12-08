<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
	 protected $table='loaisanpham';
     public $timestamps=false;
      public function product()
    {
        // một sản phẩm có nhiều loại sản phẩm thì chọn
        //hasMany('','','');
        // đường dẫn thư mục ,khóa ngoại của sp product ,khóa chính của loại sản phẩm lloaisanpham
        return $this->hasMany('App\products','id_type','id');

    }
    public function bill_detail()
    {
        return $this->hasMany('App\bill_detail','id_product','id');
    }
}
