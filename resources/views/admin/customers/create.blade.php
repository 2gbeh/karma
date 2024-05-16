@extends('layouts.form-layout')

<?php
$params = (object)[
  'title' => 'Add Customer',
  'resource' => 'Customers',
  'type' => 'form',
  // 
  'sales_ledger_options' => [
    1 => "Sales account", 
    2 => "Inventory account", 
    3 => "Cost of sales"
  ],
  'terms_of_payment_options'=> ["COD", "Pay in number of days"],
];
?>

@section('subtitle', $params->title)

@section('container')
<x-breadcrumb :level="$params->resource" :location="$params->title" :as="$params->type" />
{{-- --}}
<div class="row clearfix">
  <div class="col-xs-12">
    <div class="card">
      <x-form.form-title-wrapper :h1="$params->title" p="customer" :as="$params->type">
        <form class="form" id="form_validation" method="post" action="">
          @csrf
          <div class="row clearfix">
            <x-form.form-input label="Customer Name" name="name" required />
            {{-- --}}
            <x-form.form-input label="Email Address" type="email" name="email" required colspan="6" />
            <x-form.form-input label="Phone Number" type="tel" name="phone" required colspan="6" />
            {{-- --}}
            <x-form.form-input label="Home Address" name="address" required />
            {{-- --}}
            <x-form.form-select label="Sales Ledger" name="sales_ledger_id" :options="$params->sales_ledger_options"
              required colspan="6" />
            <x-form.form-select label="Terms of Payment" name="terms_of_payment"
              :options="$params->terms_of_payment_options" required colspan="6" />
            {{-- --}}
            <x-form.form-button as="Save" />
          </div>
        </form>
      </x-form.form-title-wrapper>
    </div>
  </div>
</div>
@endsection