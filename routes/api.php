<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



#GET
Route::get('/exibirMarmitas', 'api\ControllerMarmitas@index')->name('exibirAll');


#POST
Route::post('/cadastrarMarmitas', 'api\ControllerMarmitas@store')->name('cadastrar');