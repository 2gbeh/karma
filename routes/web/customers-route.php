<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
  Route::resource('customers', CustomerController::class)->except([
    'show'
  ]);

  // Route::resource('customers/invoices', CustomerInvoiceController::class);

  // Route::resource('customers/receipts', CustomerReceiptController::class);

  // Route::view('/customer-invoices', 'admin.customer-invoices.index')->name('customer-invoices.index');
  // Route::view('/customer-invoices/create', 'admin.customer-invoices.create')->name('customer-invoices.create');

  // Route::view('/customer-receipts', 'admin.customer-receipts.index')->name('customer-receipts.index');
  // Route::view('/customer-receipts/create', 'admin.customer-receipts.create')->name('customer-receipts.create');
});
