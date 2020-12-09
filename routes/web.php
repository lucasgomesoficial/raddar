<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
  Route::get('trello', 'TrelloController@trello')->name('admin.trello');
  Route::get('videos', 'VideosController@videos')->name('admin.videos');
  Route::get('agenda', 'AgendaController@agenda')->name('admin.agenda');
  
  Route::get('estoque/mapa-estoque', 'MapaController@mapa')->name('admin.mapa');
  Route::get('comercial-vd/indicadores-vd', 'VdController@vd')->name('admin.vd');
  Route::get('comercial-varejo/indicadores-comerciais', 'IndicadoresController@indicadores')->name('admin.indicadores');
  Route::get('comercial-varejo/meta-realizado', 'VarejoController@varejo')->name('admin.varejo');
  Route::get('resultados/gerencial-grupo', 'GerencialController@show')->name('admin.gerencial');
  Route::get('planos/planos-de-acao', 'ActionController@action')->name('admin.action');

  Route::get('storage/users/{file}', function ($file) {
    $path = storage_path('app/public' . DIRECTORY_SEPARATOR . 'users' . DIRECTORY_SEPARATOR . $file);
    return response()->file($path);
  });

  Route::get('storage/group/{file}', function ($file) {
    $path = storage_path('app/public' . DIRECTORY_SEPARATOR . 'group' . DIRECTORY_SEPARATOR . $file);
    return response()->file($path);
  });
  
  Route::put('profile/perfil', 'PerfilController@perfilUpdate')->name('admin.perfilup');
  Route::get('profile/perfil', 'PerfilController@perfil')->name('admin.perfil');
  
  Route::get('administrativo', 'SetupController@index')->name('admin.setup');
  Route::post('administrativo', 'SetupController@create')->name('admin.create');
  Route::get('editar/{id}', 'SetupController@edit')->name('admin.edit');
  Route::put('editar/{id}', 'SetupController@editUser')->name('admin.edituser');
  Route::put('editar/{id}', 'SetupController@editService')->name('admin.editservice');

  Route::get('principal', 'AdminController@index')->name('admin.principal');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();