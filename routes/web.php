<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ornek/{isim}',function($isim){

    return view('deneme',['isim'=>$isim]);
});
