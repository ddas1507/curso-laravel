<?php

Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');
	Route::get('/categoria/{id}', 'SiteController@categoria');
	Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
	

});
