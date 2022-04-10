<?php

use App\Http\Controllers\donationsController;
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
    return view('donations.index');
});

Route::get('/donate', function () {
    return view('donations.donate');
});

Route::get('/show', function () {
    return view('donations.show');
});

