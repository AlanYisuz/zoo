<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ZooController;
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

Route::controller(ZooController::class)->group(function(){
    Route::get('/','index');
    Route::get('/animal/vaca','vaca');
    Route::get('/animal/tigre','tigre');
    Route::get('/animal/jirafa','jirafa');
});

