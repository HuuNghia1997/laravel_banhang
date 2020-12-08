<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// để sử dụng bảng model silde trong providers
use App\slide;
use App\products;
use App\loaisanpham;
use App\customer;
use App\user;
use App\news;
class Pagecontroller extends Controller
{
    public function getIndex()
    {

      $slide = slide::all()->toArray();
      $products = products::where('new',1)->paginate(4) ;
      $sanpham_khuyenmai=products::where('promotion_price',0)->paginate(8);


    //truyền biến hoặc dùng compact
    // return view('page.trangchu',['slide'=>$slide]);
      return view('page.trangchu',compact('slide','products','sanpham_khuyenmai'));
    //   return view('page.trangchu')->with('slide',$slide);
    }
    public function loaisp($id)
    {
      $loaisanpham = products::where('idloai',$id)->paginate(6) ;
      $sanphamkhac = products::where('idloai','<>',$id)->paginate(8);
      $dssanpham = loaisanpham::all()->toArray();
      $tensp = loaisanpham::where('id',$id)->first();
      // echo $loaisanpham;
      // exit();
         return view('page.loaisp',compact('loaisanpham','sanphamkhac','dssanpham','tensp'));
    }
    public function chitietsanpham(Request $rep)
    {
      $sanpham = products::where('id',$rep->id)->first();
      return view('page.chitietsanpham',compact('sanpham'));
    }
    public function lienhe()
    {
      return view('page.lienhe');
    }
    public function gioithieu()
    {
      return view('page.gioithieu');
    }
    public function thu()
    {
      return view('page.loaisanpham');
    }
    public function bien($id)
    {
      $sanpham=products::where('idloai',$id)->get();

      return view('page.image',compact('sanpham'));
    }
}
