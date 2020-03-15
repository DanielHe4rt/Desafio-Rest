<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



#GET
Route::get('/exibirMarmitas', 'api\ControllerMarmitas@index')->name('exibirAll');
Route::get('/exibirMarmita/{marmitas}', 'api\ControllerMarmitas@show')->name('exibirMarmita');

#POST
Route::post('auth/login', 'api\\AuthController@login');

Route::post('/cadastrarMarmitas', 'api\ControllerMarmitas@store')->name('cadastrarMarmita');

#PUT
Route::put('/editarMarmitas/{marmitas}', 'api\ControllerMarmitas@update')->name('editarMarmita');

#DELETE
Route::delete('/deletarMarmita/{marmita}', 'api\ControllerMarmitas@destroy')->name('deletarMarmita');


