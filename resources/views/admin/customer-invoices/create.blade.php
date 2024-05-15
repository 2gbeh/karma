@extends('layouts.form-table-layout')

@inject('Bh', 'App\Helpers\BladeHelper')
@inject('Cc', 'App\Constants\CustomerConstant')

<?php
$params = (object)[
  'title' => 'Customer Invoice',
  'resource' => 'Customers',
  'type' => 'form',
  'sales_ledger_options' => [1 => "Sales account", 2 => "Inventory account", 3 => "Cost of sales"],
  'terms_of_payment_options'=> ["COD", "Pay in number of days"],
  'thead' => ['#', 'Customer Name', 'Email Address', 'Phone Number', 'Sales Ledger', 'Terms of Payment', 'Date Created', 'Action'],
  'tbody' => $Cc::CUSTOMERS,
];

// Select customer (customer_id.ddl)

// name
// email
// phone
// address

// invoice_no
// invoice_date
// exchange_rate
// ---
// item
// description
// qty
// rate
// amount
// ---
// total
// balance_due
// [Save] [Print]
?>

@section('subtitle', $params->title)

@section('container')
<x-breadcrumb :level="$params->resource" :location="$params->title" :as="$params->type" />
{{-- --}}
<div class="row clearfix">
  <div class="col-xs-12">
    <div class="card">
      <div class="header">
        <x-form.form-title :h1="$params->title" p="customer" :as="$params->type" />
        {{-- FORM --}}
        @includeIf('admin.customer-invoices.ui.customer-invoice-form')
      </div>
    </div>
    {{-- TABLE --}}
    <div class="card">
      @includeIf('admin.customer-invoices.ui.customer-invoice-table')
    </div>
  </div>
</div>
@endsection