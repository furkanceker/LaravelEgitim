<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ornek/{isim}',function($isim){

    return view('deneme',['isim'=>$isim]);
});

Route::get('web',function(){
    $data["title"] = "Laravel Eğitim";
    $data["nav1"] = "Hakkımızda";
    $data["nav2"] = "Hizmetler";
    $data["nav3"] = "Galeri";
    $data["nav4"] = "İletişim";
    $data["masthead"] = "Laravel Eğitimleri";
    $data["mastinfo"] = "Laravel Eğitimine Hoşgeldiniz!";
    $data["abouttitle"] = "Sana İhtiyacımız Var";
    $data["aboutinfo"] = "+10 dan Fazla Laravel Eğitimini Sizlere Sunuyoruz";

    return view('web',$data);
});
