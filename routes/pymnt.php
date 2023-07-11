<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Models\PaymentModel;

Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');
Route::get('payment/create', [PaymentController::class, 'create'])->name('payment.create');
Route::post('payment', [PaymentController::class, 'store'])->name('payment.store');
Route::get('payment/{id}/edit', [PaymentController::class, 'edit'])->name('payment.edit');
Route::put('payment/{id}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('payment/{id}', [PaymentController::class, 'destroy'])->name('payment.destroy');
