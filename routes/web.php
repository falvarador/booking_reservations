<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CancellationRefundController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('bookings', BookingController::class);
Route::resource('cancellation-refunds', CancellationRefundController::class);
Route::resource('locations', LocationController::class);
Route::resource('payments', PaymentController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('services', ServiceController::class);
Route::resource('users', UserController::class);
