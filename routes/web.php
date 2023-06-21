<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MediafileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ExcersiceController;






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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tests', TestController::class);

Route::resource('mediafiles', MediafileController::class);
Route::resource('calendars', CalendarController::class);
Route::resource('pays', PayController::class);
Route::resource('activities', ActivityController::class);
Route::resource('subscriptions', SubscriptionController::class);
Route::resource('excersices', ExcersiceController::class);









