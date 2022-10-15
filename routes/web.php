<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/',[DashboardController::class,'index'])->name('/');
    Route::resource('users',UserController::class);
    Route::resource('roles',RoleController::class);
    Route::resource("products", ProductController::class);
    Route::resource("clients", ClientController::class);
    Route::resource("purchases", PurchaseController::class);
    Route::resource("invoices",InvoiceController::class);
});
require __DIR__.'/auth.php';