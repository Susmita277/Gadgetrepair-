<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\CalculatorController;
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
    return view('Frontend.index');
});

Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/calculator', [CalculatorController::class, 'calculate']);

