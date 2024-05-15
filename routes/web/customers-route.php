<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

// Route::resource('/customers', CustomerController::class);
Route::view('/customers', 'admin.customers.index')->name('customers.index');
Route::view('/customers/create', 'admin.customers.create')->name('customers.create');

Route::view('/customer-invoices', 'admin.customer-invoices.index')->name('customer-invoices.index');
Route::view('/customer-invoices/create', 'admin.customer-invoices.create')->name('customer-invoices.create');

Route::view('/customer-receipts', 'admin.customer-receipts.index')->name('customer-receipts.index');
Route::view('/customer-receipts/create', 'admin.customer-receipts.create')->name('customer-receipts.create');
