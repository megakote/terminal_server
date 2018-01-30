<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Gate Routes
|--------------------------------------------------------------------------
|
| Через эти ворота поступают данные от терминалов
|
*/

// Приход заказа
// Route::post('/order', function (Request $request) {
//   $terminal = $request->terminal;
// });
Route::post('/order',['as' => 'gate.order', 'uses' => 'Gate\ordersController@index']);