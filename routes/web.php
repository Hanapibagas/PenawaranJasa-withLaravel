<?php

use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\MyOrderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index-home');
Route::get('explore', [HomeController::class, 'explore'])->name('explore-landing');
Route::get('details-booking/{id}', [HomeController::class, 'details_booking'])->name('details-booking-landing');
Route::get('booking/{id}', [HomeController::class, 'booking'])->name('booking-landing');
Route::get('details/{id}', [HomeController::class, 'details'])->name('details-landing');

Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']], function () {
    // Dashboard
    Route::get('dashboard', [MemberController:: class, 'index'])->name('dashboard-member');

    // Service
    Route::get('service', [ServiceController::class, 'index'])->name('');

    // Request
    Route::get('approve-request/{id}', [RequestController::class, 'approve-request'])->name('approve-request');
    Route::get('request', [RequestController::class, 'request'])->name('request');

    // my order
    Route::get('accepted/order/{id}', [MyOrderController::class, 'accepted'])->name('accepted-order');
    Route::get('rejected/order/{id}', [MyOrderController::class, 'rejected'])->name('rejected-order');
    Route::get('order', [MyOrderController::class, 'order']);

    // profile
    Route::get('delete-photo', [ProfileController::class, 'delete'])->name('delete-photo-profile');
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
});
