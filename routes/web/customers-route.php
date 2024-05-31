<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
  Route::resource('customers', CustomerController::class)->except([
    'show'
  ]);

  Route::resource('customers/invoices', CustomerInvoiceController::class)->names("customers.invoices");

  Route::resource('customers/receipts', CustomerReceiptController::class)->names("customers.receipts");
});
