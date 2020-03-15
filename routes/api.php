<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



#GET
Route::get('/exibirMarmitas', 'api\ControllerMarmitas@index')->name('exibirAll');
Route::get('/exibirMarmita/{marmitas}', 'api\ControllerMarmitas@show')->name('exibirMarmita');

#POST
Route::post('/cadastrarMarmitas', 'api\ControllerMarmitas@store')->name('cadastrar');