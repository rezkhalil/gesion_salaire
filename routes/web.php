<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RbgController;
use App\Http\Controllers\RbpController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RtnlegController;
use App\Http\Controllers\PersonneController;

Auth::routes();
Route::redirect('/', 'admin-dash');
Route::redirect('home', 'admin-dash');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin-dash', [AdminController::class,'index']);

    Route::get('all-users',[UserController::class,'index']);
    Route::get('new-user',[UserController::class,'create']);
    Route::post('new-user',[UserController::class,'store']);
    Route::get('show-user/{id}',[UserController::class,'show']);
    Route::get('/edit-user/{id}',[UserController::class,'edit']);
    Route::post('/update-user/{id}',[UserController::class,'update']);
    Route::get('/delete-user/{id}',[UserController::class,'destroy']);


    Route::get('all-personne',[PersonneController::class,'index']);
    Route::get('new-personne',[PersonneController::class,'create']);
    Route::post('new-personne',[PersonneController::class,'store']);
    Route::get('show-personne/{id}',[PersonneController::class,'show']);
    Route::get('/edit-personne/{id}',[PersonneController::class,'edit']);
    Route::post('/update-personne/{id}',[PersonneController::class,'update']);
    Route::get('/delete-personne/{id}',[PersonneController::class,'destroy']);

    Route::get('all-rtnleg',[RtnlegController::class,'index']);
    Route::get('new-rtnleg',[RtnlegController::class,'create']);
    Route::get('get-date',[RtnlegController::class,'getData']);
    Route::post('new-rtnleg',[RtnlegController::class,'store']);
    Route::get('show-rtnleg/{id}',[RtnlegController::class,'show']);
    Route::get('/edit-rtnleg/{id}',[RtnlegController::class,'edit']);
    Route::post('/update-rtnleg/{id}',[RtnlegController::class,'update']);
    Route::get('/delete-rtnleg/{id}',[RtnlegController::class,'destroy']);

    Route::get('all-rbg',[RbgController::class,'index']);
    Route::get('new-rbg',[RbgController::class,'create']);
    Route::post('new-rbg',[RbgController::class,'store']);
    Route::get('/edit-rbg/{id}',[RbgController::class,'edit']);
    Route::post('/update-rbg/{id}',[RbgController::class,'update']);
    Route::get('/delete-rbg/{id}',[RbgController::class,'destroy']);

    Route::get('file',[FileController::class,'file']);
    Route::get('show-file/{id}',[FileController::class,'show']);



});
