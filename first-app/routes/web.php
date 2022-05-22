<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\OrderController;
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

Route::get('/addOrderDetails',  function () {
    return view('addOrderDetails');
});

Route::get('/viewOder',  function () {
    return view('viewOrderDetails', ['name' => 'viewOrderDetails']);
});

//Order
// Route::post('/order/store', 'OrderController@store')->name('orderStore');
Route::post('/order/store', [App\Http\Controllers\OrderController::class, 'store']);



