<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin', function () {
    return "welcome";
});
Route::get('/mohammed', function () {
    return "<div class='alert alert-danger'>mohammed president of the sudan</div>";
}); 


//Route::resource('news','newsController');