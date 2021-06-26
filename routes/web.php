<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TripController;



Route::get('/logout',[RegisterController::class , 'logout'])->name('logout');
Route::get('/home',[RegisterController::class , 'home'])->name('home');
Route::get('/',[RegisterController::class , 'home']);
Route::get('/dashboard',[DashboardController::class , 'index'])->name('dashboard');
Route::get("/trip",[TripController::class,'index'])->name('trip');
Route::post('/trip',[TripController::class , 'store'])->name('trip');
Route::get('/register',[RegisterController::class , 'index'])->name('register');
Route::post('register',[RegisterController::class , 'store']);
Route::get('/bus',[BusController::class , 'index'])->name('bus');
Route::post('bus',[BusController::class , 'store']);
Route::get('/registration',[RegistrationController::class , 'index'])->name('registration');
Route::post('registration',[RegistrationController::class , 'storeRelation']);

Route::get('/login',[LoginController::class , 'index'])->name('login');
Route::post('/login',[LoginController::class , 'login'])->name('login');

Route::get('/posts', function () {
    return view('posts.index');
});
