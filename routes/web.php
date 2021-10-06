<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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
Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::get('add_docter',[AdminController::class,'docters_view']);

Route::post('add_docters', [AdminController::class, 'docters_add']);
Route::get('show_apointment', [AdminController::class, 'show_apointment']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('appointment', [HomeController::class, 'appointment']);
Route::get('myappointment', [HomeController::class, 'myappointment']);
Route::get('cancel_apoint/{id}', [HomeController::class, 'cancel_apoint']);
Route::get('approved/{id}', [AdminController::class, 'approved']);
Route::get('canceled/{id}', [AdminController::class, 'canceled']);
Route::get('alldocters',[AdminController::class,'alldocters']);
Route::get('deletedocters/{id}',[AdminController::class,'deletedocters']);
Route::get('updatedocters/{id}',[AdminController::class,'updatedocters']);
Route::post('updateDocter/{id}',[AdminController::class,'updateDocter']);
Route::post('mailsend/{id}',[AdminController::class,'mailsend']);
Route::get('sendmail/{id}',[AdminController::class,'sendmail']);

Route::get('latestnews',[AdminController::class,'latestnews']);
Route::post('addlatestnews',[AdminController::class,'addlatestnews']);


