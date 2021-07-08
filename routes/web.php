<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\BlogController;

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

Route::get('/', function () {
    return view('insert');
});

Route::post('store',[BlogController::class,'store']);

Route::get('show',[BlogController::class,'show']);

Route::get('delete/{id}',[BlogController::class,'destroy']);

Route::get('edit/{id}',[BlogController::class,'edit']);

Route::post('update/{id}',[BlogController::class,'update']);




