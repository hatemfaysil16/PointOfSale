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
    Route::resource('users',UserController::class);
    Route::resource('roles',RoleController::class);
    Route::resource("typesofweight", TypesofweightController::class)->except('show');
    Route::resource("products", ProductController::class);
    Route::resource("purchases", PurchaseController::class);

    
    Route::resource("clients", ClientController::class);
    Route::post("clients/insert",[ClientController::class,'insert'])->name('insert');
    Route::post("clients/withdraw",[ClientController::class,'withdraw'])->name('withdraw');
 
    
    Route::resource("invoices",InvoiceController::class);
    Route::get("invoices/ajaxProducts/{product}",[InvoiceController::class,'ajaxProducts']);
    Route::get("invoices/ajaxClient/{client}",[InvoiceController::class,'ajaxClient']);
    Route::post("storeInvoicesaccount",[InvoiceController::class,'storeInvoicesaccount'])->name('storeInvoicesaccount');
    Route::resource("warehouse",WareHouseController::class)->except(['create','store','edit','update','destroy']);
});
require __DIR__.'/auth.php';