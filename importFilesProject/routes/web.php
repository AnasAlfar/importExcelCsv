<?php

use App\Http\Controllers\BusController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('bus.index');
});

Route::resource('bus', BusController::class);





