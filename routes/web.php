<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', action: function () {
    return view( 'Page');
});


Route::post('/homePage', function() {
    return "hello world";
});