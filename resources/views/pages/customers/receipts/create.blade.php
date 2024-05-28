@extends('layouts.form-table-layout')

@inject('Bh', 'App\Helpers\BladeHelper')
@inject('Cc', 'App\Constants\CustomerConstant')
@inject('Ic', 'App\Constants\InvoiceConstant')

<?php
function getInvoiceNo($data) {
    $arr = [];
    foreach ($data as $value => $text) {
        $arr[$value] = "Invoice #" . $text;
    }
    return $arr;
}

$params = (object)[
  'title' => 'Add Receipt',
  'resource' => 'Receipts',
  'type' => 'form',
  // 
  'customer_id_options' => $Bh::ddl_f($Cc::CUSTOMERS, ['id', 'name']),
  'invoice_id_options' => getInvoiceNo($Bh::ddl_f($Ic::INVOICES, ['id', 'rate'])),
];
?>

@section('subtitle', $params->title)

@section('container')
<x-breadcrumb :level="$params->resource" :location="$params->title" :as="$params->type" />
{{-- --}}
<div class="row clearfix">
  <div class="col-xs-12">
    <div class="card">
      <x-form.form-title-wrapper h1="Create Receipt">
        <form class="form" id="form_validation" method="post" action="">
          @csrf
          <div class="row clearfix">
            <x-form.form-select label="Select Customer" name="customer_id" :options="$params->customer_id_options"
              required colspan="6" />
            <x-form.form-select label="Select Invoice" name="invoice_id" :options="$params->invoice_id_options" required
              colspan="6" />
          </div>
          <div class="row clearfix">
            {{-- CUSTOMER INFO --}}
            <x-form.form-input label="Invoice Date" type="date" name="invoice_date" required colspan="4" />
            <x-form.form-input label="Invoice Amount" type="number" name="invoice_amount" required colspan="4" />
            <x-form.form-input label="Amount Due" type="number" name="amount_due" required colspan="4" />

            {{-- ACTION --}}
            <x-form.form-button as="Create" />
          </div>
        </form>
      </x-form.form-title-wrapper>
    </div>
  </div>
</div>
@endsection