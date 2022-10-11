<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/',[DashboardController::class,'index'])->name('/');
    Route::resource('users',UserController::class);
    Route::resource('roles',RoleController::class);









    
});


require __DIR__.'/auth.php';
