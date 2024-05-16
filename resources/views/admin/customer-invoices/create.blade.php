@extends('layouts.form-table-layout')

@inject('Bh', 'App\Helpers\BladeHelper')
@inject('Cc', 'App\Constants\CustomerConstant')
@inject('Ic', 'App\Constants\InvoiceConstant')

<?php
$params = (object)[
  'title' => 'Add Invoice',
  'resource' => 'Customers',
  'type' => 'form',
  // 
  'customer_id_options' => $Bh::ddl_f($Cc::CUSTOMERS, ['id', 'name']),
  'thead' => [
    '#', 
    'Item',
    'Description',
    'Rate',
    'Qty',
    'Amount',
    'Action'
  ],
  'tbody' => $Bh::arrayTop($Ic::INVOICES, 2),  
];
?>

@section('subtitle', $params->title)

@section('container')
<x-breadcrumb :level="$params->resource" :location="$params->title" :as="$params->type" />
{{-- --}}
<div class="row clearfix">
  <div class="col-xs-12">
    {{-- CREATE INVOICE --}}
    <div class="card">
      <x-form.form-title-wrapper h1="Create Invoice">
        @includeIf('admin.customer-invoices.ui.create-invoice')
      </x-form.form-title-wrapper>
    </div>

    {{-- ADD INVOICE ITEM --}}
    <div class="card">
      <x-form.form-title-wrapper h1="Add Invoice Item">
        @includeIf('admin.customer-invoices.ui.add-invoice-item')
      </x-form.form-title-wrapper>

      {{-- INVOICE TABLE --}}
      @includeIf('admin.customer-invoices.ui.invoice-table')

      {{--INVOICE TOTAL --}}
      <x-form.form-title-wrapper h1="">
        @includeIf('admin.customer-invoices.ui.invoice-total')
      </x-form.form-title-wrapper>
    </div>
  </div>
</div>
@endsection