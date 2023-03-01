<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'contact']) ->name('contact');

Route::post('/sendmail', [PageController::class, "sendEmail"])->name("send");

Route::get ('/grazie',[PageController::class,'thankyou'])->name('thank-you');