<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
'as'=>'trang-chu',
'uses'=>'PageController@getIndex'
]);
Route::get('loaisanpham/{id}',[
    'as'=>'loaisanpham',
    'uses'=>'PageController@loaisp'
    ]);
Route::get('chitietsanpham/{id}',[
        'as'=>'chitietsanpham',
        'uses'=>'PageController@chitietsanpham'
        ]);

Route::get('lienhe',[
        'as'=>'lienhe',
        'uses'=>'PageController@lienhe'
        ]);
Route::get('gioithieu',[
        'as'=>'gioithieu',
        'uses'=>'PageController@gioithieu'
        ]);
Route::get('loaisp',function(){
    return view('page.loai');
});
Route::get('bien/{id}','PageController@bien');

