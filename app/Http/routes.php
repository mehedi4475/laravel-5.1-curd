<?php

Route::get('/','crud@index');
Route::post('/crud/store','crud@store');

Route:get('/show','crud@show');
Route:get('/crud/update','crud@update');


?>