<?php

Route::get('/', ['uses' => 'RouteController@index']);
Route::get('/sobre', ['uses' => 'RouteController@about']);
Route::get('/fale-conosco', ['uses' => 'RouteController@contact']);
Route::get('/politica-de-privacidade', ['uses' => 'RouteController@privacy']);
Route::get('/produto', ['uses' => 'RouteController@product']);
Route::get('/condicoes-de-uso', ['uses' => 'RouteController@terms']);
