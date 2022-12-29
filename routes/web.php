<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
       return view('dashboard.index');
});

Route::group(['prefix'=>'user'],function(){
    Route::get('/',[UserController::class,'index']);
    Route::get('create',[UserController::class,'create']);
    Route::post('create',[UserController::class,'store']);
    Route::get('{id}/edit',[UserController::class,'store']);
    Route::post('{id}/edit',[UserController::class,'update']);
    Route::get('{id}/delete',[UserController::class,'destroy']);
});


