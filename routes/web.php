<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class,'home'])->name('web.home');
Route::get('/contact', [SiteController::class, 'contact'])->name('web.contact');
Route::get('/gallery', [SiteController::class, 'gallery'])->name('web.gallery');
Route::get('/about', [SiteController::class, 'about'])->name('web.about');
Route::get('/booking', [SiteController::class, 'booking'])->name('web.booking');
Route::get('/booking/calendar', [SiteController::class, 'bookingCalendar'])->name('web.booking.calendar');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
