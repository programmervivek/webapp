<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']) ;
Route::get('/register',[HomeController::class , 'register'])->name('user.register') ;
Route::get('/user/details/{id}',[HomeController::class , 'user_details'])->name('user_details') ;
Route::post('/register/post',[HomeController::class , 'registersave'])->name('register.save') ;
