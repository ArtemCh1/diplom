<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/price', function () {
    return view('price');
});
Route::get('/choosen', function () {
    return view('choosen');
});
Route::get('/profet', function () {
    return view('profet');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/income', function () {
    return view('income');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/dividents', function () {
    return view('dividents');
});
Route::get('/capitalization', function () {
    return view('capitalization');
});
Route::get('/avto_main', function () {
    return view('avto_main');
});

