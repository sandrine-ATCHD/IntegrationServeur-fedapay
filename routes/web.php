<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Produit');
})->name('base');


Route::get('/payment', [Payment::class, "matransaction"])->name('payment');

Route::get('/payment/callback', [Payment::class, "callback"])->name('feda.callback');

