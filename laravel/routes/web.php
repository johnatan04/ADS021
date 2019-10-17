<?php

Route::get('/', function () {
return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'area'], function(){
Route::get('listar', 'AreaController@listar');
Route::get('criar', 'AreaController@criar');
Route::get('{id/editar', 'AreaController@editar');
Route::get('{id}/remover', 'AreaController@remover');
Route::get('salvar', 'AreaController@salvar');
});
