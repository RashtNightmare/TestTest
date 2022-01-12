<?php

use Illuminate\Support\Facades\Route;

Route::post('/basket',[\App\Http\Controllers\BuyBasketController::class,'store']);

?>