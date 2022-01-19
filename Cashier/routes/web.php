<?php

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;



Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', [HomeController::class, 'index']);

// Auth Controller 

Route::group(['middleware' => 'auth', 'as' => '.'], function () {
    // Cashier Route
    Route::get('cashier', [CashierController::class, 'index'])->name('cashier.index');
    Route::post('cashier', [CashierController::class, 'store'])->name('cashier.store');

    // Supplier Route Resource
    Route::resource('supplier', SupplierController::class);

    // Supplier Route Resource
    Route::resource('buy', BuyController::class);

    // No Left 
    Route::get('not-left', [SimpleController::class, 'NoLeft']);

    // Debt List
    Route::get('debt-list', [SimpleController::class, 'DebtList']);

    // Debt List
    Route::get('expire', [SimpleController::class, 'expire']);

    // Sellers List
    Route::get('sellers', [SellerController::class, 'index']);

    Route::get('sale', [SaleController::class, 'index']);
    Route::post('sale', [SaleController::class, 'getData']);
    Route::post('tbview', [SaleController::class, 'table']);
});
