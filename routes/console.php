<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
Artisan::command('GetProducts', function () {
    dispatch(new App\Jobs\GetProductsFromServer);
});
Artisan::command("SendOrderToServer {id=''}", function ($id) {
    dispatch(new App\Jobs\SendOrdersToServer($id));
});

Artisan::command("testemail", function () {
    $text = view('emails.TestEmail')->render();
    Mail::to("slowdream@yandex.ru")->send(new \App\Mail\TestEmail());
});