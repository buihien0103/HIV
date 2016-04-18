<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'benhnhan'], function(){
		Route::get('list',['as'=>'admin.benhnhan.list','uses'=>'BenhNhanController@getList']);
		Route::get('add',['as'=>'admin.benhnhan.getAdd','uses'=>'BenhNhanController@getAdd']);
		Route::post('add',['as'=>'admin.benhnhan.postAdd','uses'=>'BenhNhanController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.benhnhan.getDelete','uses'=>'BenhNhanController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.benhnhan.getEdit','uses'=>'BenhNhanController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.benhnhan.postEdit','uses'=>'BenhNhanController@postEdit']);
        Route::get('export',['as'=>'admin.benhnhan.export','uses'=>'BenhNhanController@export']);
        Route::get('import',['as'=>'admin.benhnhan.getImport','uses'=>'BenhNhanController@getImport']);
        Route::post('import',['as'=>'admin.benhnhan.postImport','uses'=>'BenhNhanController@postImport']);
	});
    Route::group(['prefix'=>'coso'], function(){
        Route::get('list',['as'=>'admin.coso.list','uses'=>'CoSoController@getList']);
        Route::get('add',['as'=>'admin.coso.getAdd','uses'=>'CoSoController@getAdd']);
        Route::post('add',['as'=>'admin.coso.postAdd','uses'=>'CoSoController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.coso.getDelete','uses'=>'CoSoController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.coso.getEdit','uses'=>'CoSoController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.coso.postEdit','uses'=>'CoSoController@postEdit']);
    });
    Route::group(['prefix'=>'dichvu'], function(){
        Route::get('list',['as'=>'admin.dichvu.list','uses'=>'DichVuController@getList']);
        Route::get('add',['as'=>'admin.dichvu.getAdd','uses'=>'DichVuController@getAdd']);
        Route::post('add',['as'=>'admin.dichvu.postAdd','uses'=>'DichVuController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.dichvu.getDelete','uses'=>'DichVuController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.dichvu.getEdit','uses'=>'DichVuController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.dichvu.postEdit','uses'=>'DichVuController@postEdit']);
    });
    Route::group(['prefix'=>'huongdan'], function(){
        Route::get('list',['as'=>'admin.huongdan.list','uses'=>'HuongDanController@getList']);
        Route::get('add',['as'=>'admin.huongdan.getAdd','uses'=>'HuongDanController@getAdd']);
        Route::post('add',['as'=>'admin.huongdan.postAdd','uses'=>'HuongDanController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.huongdan.getDelete','uses'=>'HuongDanController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.huongdan.getEdit','uses'=>'HuongDanController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.huongdan.postEdit','uses'=>'HuongDanController@postEdit']);
    });
    Route::group(['prefix'=>'ketqua'], function(){
        Route::get('list',['as'=>'admin.ketqua.list','uses'=>'KetQuaController@getList']);
        Route::get('add',['as'=>'admin.ketqua.getAdd','uses'=>'KetQuaController@getAdd']);
        Route::post('add',['as'=>'admin.ketqua.postAdd','uses'=>'KetQuaController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.ketqua.getDelete','uses'=>'KetQuaController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.ketqua.getEdit','uses'=>'KetQuaController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.ketqua.postEdit','uses'=>'KetQuaController@postEdit']);
    });
    Route::group(['prefix'=>'khambenh'], function(){
        Route::get('list',['as'=>'admin.khambenh.list','uses'=>'KhamBenhController@getList']);
        Route::get('add',['as'=>'admin.khambenh.getAdd','uses'=>'KhamBenhController@getAdd']);
        Route::post('add',['as'=>'admin.khambenh.postAdd','uses'=>'KhamBenhController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.khambenh.getDelete','uses'=>'KhamBenhController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.khambenh.getEdit','uses'=>'KhamBenhController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.khambenh.postEdit','uses'=>'KhamBenhController@postEdit']);
    });
    Route::group(['prefix'=>'lienhe'], function(){
        Route::get('list',['as'=>'admin.lienhe.list','uses'=>'LienHeController@getList']);
        Route::get('add',['as'=>'admin.lienhe.getAdd','uses'=>'LienHeController@getAdd']);
        Route::post('add',['as'=>'admin.lienhe.postAdd','uses'=>'LienHeController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.lienhe.getDelete','uses'=>'LienHeController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.lienhe.getEdit','uses'=>'LienHeController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.lienhe.postEdit','uses'=>'LienHeController@postEdit']);
    });
    Route::group(['prefix'=>'nhatky'], function(){
        Route::get('list',['as'=>'admin.nhatky.list','uses'=>'NhatKyController@getList']);
        Route::get('add',['as'=>'admin.nhatky.getAdd','uses'=>'NhatKyController@getAdd']);
        Route::post('add',['as'=>'admin.nhatky.postAdd','uses'=>'NhatKyController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.nhatky.getDelete','uses'=>'NhatKyController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.nhatky.getEdit','uses'=>'NhatKyController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.nhatky.postEdit','uses'=>'NhatKyController@postEdit']);
    });
    Route::group(['prefix'=>'quyen'], function(){
        Route::get('list',['as'=>'admin.quyen.list','uses'=>'QuyenController@getList']);
        Route::get('add',['as'=>'admin.quyen.getAdd','uses'=>'QuyenController@getAdd']);
        Route::post('add',['as'=>'admin.quyen.postAdd','uses'=>'QuyenController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.quyen.getDelete','uses'=>'QuyenController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.quyen.getEdit','uses'=>'QuyenController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.quyen.postEdit','uses'=>'QuyenController@postEdit']);
    });
    Route::group(['prefix'=>'tacdung'], function(){
        Route::get('list',['as'=>'admin.tacdung.list','uses'=>'TacDungController@getList']);
        Route::get('add',['as'=>'admin.tacdung.getAdd','uses'=>'TacDungController@getAdd']);
        Route::post('add',['as'=>'admin.tacdung.postAdd','uses'=>'TacDungController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.tacdung.getDelete','uses'=>'TacDungController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.tacdung.getEdit','uses'=>'TacDungController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.tacdung.postEdit','uses'=>'TacDungController@postEdit']);
    });
    Route::group(['prefix'=>'uongthuoc'], function(){
        Route::get('list',['as'=>'admin.uongthuoc.list','uses'=>'UongThuocController@getList']);
        Route::get('add',['as'=>'admin.uongthuoc.getAdd','uses'=>'UongThuocController@getAdd']);
        Route::post('add',['as'=>'admin.uongthuoc.postAdd','uses'=>'UongThuocController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.uongthuoc.getDelete','uses'=>'UongThuocController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.uongthuoc.getEdit','uses'=>'UongThuocController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.uongthuoc.postEdit','uses'=>'UongThuocController@postEdit']);
    });
    Route::group(['prefix'=>'user'], function(){
        Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
        Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
        Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
    });
    Route::group(['prefix'=>'hocvan'], function(){
        Route::get('list',['as'=>'admin.hocvan.list','uses'=>'HocVanController@getList']);
        Route::get('add',['as'=>'admin.hocvan.getAdd','uses'=>'HocVanController@getAdd']);
        Route::post('add',['as'=>'admin.hocvan.postAdd','uses'=>'HocVanController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.hocvan.getDelete','uses'=>'HocVanController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.hocvan.getEdit','uses'=>'HocVanController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.hocvan.postEdit','uses'=>'HocVanController@postEdit']);
    });
    Route::group(['prefix'=>'dantoc'], function(){
        Route::get('list',['as'=>'admin.dantoc.list','uses'=>'DanTocController@getList']);
        Route::get('add',['as'=>'admin.dantoc.getAdd','uses'=>'DanTocController@getAdd']);
        Route::post('add',['as'=>'admin.dantoc.postAdd','uses'=>'DanTocController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.dantoc.getDelete','uses'=>'DanTocController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.dantoc.getEdit','uses'=>'DanTocController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.dantoc.postEdit','uses'=>'DanTocController@postEdit']);
    });
    Route::group(['prefix'=>'tongiao'], function(){
        Route::get('list',['as'=>'admin.tongiao.list','uses'=>'TonGiaoController@getList']);
        Route::get('add',['as'=>'admin.tongiao.getAdd','uses'=>'TonGiaoController@getAdd']);
        Route::post('add',['as'=>'admin.tongiao.postAdd','uses'=>'TonGiaoController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.tongiao.getDelete','uses'=>'TonGiaoController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.tongiao.getEdit','uses'=>'TonGiaoController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.tongiao.postEdit','uses'=>'TonGiaoController@postEdit']);
    });
    Route::group(['prefix'=>'nghenghiep'], function(){
        Route::get('list',['as'=>'admin.nghenghiep.list','uses'=>'NgheNghiepController@getList']);
        Route::get('add',['as'=>'admin.nghenghiep.getAdd','uses'=>'NgheNghiepController@getAdd']);
        Route::post('add',['as'=>'admin.nghenghiep.postAdd','uses'=>'NgheNghiepController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.nghenghiep.getDelete','uses'=>'NgheNghiepController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.nghenghiep.getEdit','uses'=>'NgheNghiepController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.nghenghiep.postEdit','uses'=>'NgheNghiepController@postEdit']);
    });

   Route::get('home', function(){
        return view('admin.home');
   });
});

Route::get('chi-tiet/{id}', function ($id){

       $detail = DB::table('benh_nhan')->where('ma_benh_nhan',$id)->first();
        return view('admin.benhnhan.chitiet', compact('detail'));
});
Route::get('chi-tiet-uong-thuoc/{id}', function ($id){

       $detail = DB::table('uong_thuoc')->where('ma_nhac_nho',$id)->first();
        return view('admin.uongthuoc.chitiet', compact('detail'));
});