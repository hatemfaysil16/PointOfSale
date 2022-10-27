<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypesofweightController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WareHouseController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {

    Route::get('/',[DashboardController::class,'index'])->name('/');
    Route::resource('users',UserController::class)->except('show');
    Route::resource('roles',RoleController::class);
    Route::resource("typesofweight", TypesofweightController::class)->except('show');
    Route::resource("products", ProductController::class)->except('show');
    Route::resource("purchases", PurchaseController::class)->except('show');

    
    Route::resource("clients", ClientController::class);
    Route::resource("invoices",InvoiceController::class);
    Route::resource("warehouse",WareHouseController::class);
});
require __DIR__.'/auth.php';