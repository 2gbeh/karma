@extends('layouts.form-table-layout')

@inject('Ah', 'App\Helpers\ArrayHelper')
@inject('Bh', 'App\Helpers\BladeHelper')
@inject('Cc', 'App\Constants\CustomerConstant')
@inject('Ic', 'App\Constants\InvoiceConstant')

<?php $params = (object)$params ?>

@section('subtitle', $params->title)

@section('container')
<x-breadcrumb :level="$params->resource" :location="$params->title" :as="$params->type" />
{{-- --}}
<div class="row clearfix">
  <div class="col-xs-12">
    {{-- CREATE INVOICE --}}
    <div class="card">
      <x-form.form-title-wrapper h1="Create Invoice">
        @includeIf('pages.customers.invoices.ui.create-invoice')
      </x-form.form-title-wrapper>
    </div>

    {{-- ADD INVOICE ITEM --}}
    <div class="card">
      <x-form.form-title-wrapper h1="Add Invoice Item">
        @includeIf('pages.customers.invoices.ui.add-invoice-item')
      </x-form.form-title-wrapper>

      {{-- INVOICE TABLE --}}
      @includeIf('pages.customers.invoices.ui.invoice-table')

      {{--INVOICE TOTAL --}}
      <x-form.form-title-wrapper h1="">
        @includeIf('pages.customers.invoices.ui.invoice-total')
      </x-form.form-title-wrapper>
    </div>
  </div>
</div>
@endsection