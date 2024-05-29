@extends('layouts.form-layout')

<?php $params = (object)$params ?>

@section('subtitle', $params->title)

@section('container')
<x-breadcrumb :level="$params->resource" :location="$params->title" :as="$params->type" />
{{-- --}}
<div class="row clearfix">
  <div class="col-xs-12">
    <div class="card">
      <x-form.form-title-wrapper :h1="$params->title" p="customer" :as="$params->type">
        <x-form.form-method-post :action="$params->action">
          <div class="row clearfix">
            <x-form.form-input label="Customer Name" name="name" :defaults="$params->defaults" required />
            {{-- --}}
            <x-form.form-input label="Email Address" type="email" name="email" :defaults="$params->defaults" required
              colspan="6" />
            <x-form.form-input label="Phone Number" type="tel" name="phone" :defaults="$params->defaults" required
              colspan="6" />
            {{-- --}}
            <x-form.form-input label="Home Address" name="address" :defaults="$params->defaults" required />
            {{-- --}}
            <x-form.form-select label="Sales Ledger" name="income_expense_type_id" :defaults="$params->defaults"
              :options="$params->sales_ledger_options" required colspan="6" />
            <x-form.form-select label="Terms of Payment" name="terms_of_payment" :defaults="$params->defaults"
              :options="$params->terms_of_payment_options" required colspan="6" />
            {{-- --}}
            <x-form.form-button as="Save" />
          </div>
        </x-form.form-method-post>
      </x-form.form-title-wrapper>
    </div>
  </div>
</div>
@endsection