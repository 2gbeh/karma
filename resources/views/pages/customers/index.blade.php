@extends('layouts.table-layout')

@inject('Bh', 'App\Helpers\BladeHelper')
@inject('Cc', 'App\Constants\CustomerConstant')
@inject('IETs', 'App\Services\IncomeExpenseTypeService')

<?php $params = (object)$params ?>

@section('title', $params->title)

@section('container')
<x-breadcrumb :level="$params->resource" :location="$params->title" :as="$params->type" />
{{-- --}}
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <x-table.table-search-bar :all="count($params->tbody)" :trash="0" />
      {{-- --}}
      <form class="actionForm" action="" method="get">
        @csrf
        <x-table.table-pagination-with-selected />
        {{-- --}}
        <x-table.table-wrapper :thead="$params->thead">
          @forelse ($params->tbody as $customer)
          @php
          $sn = $loop->iteration;
          $item = (object) $customer;
          @endphp
          <tr>
            <x-table.table-checkbox :sn="$sn" :item="$item" />
            {{-- --}}
            <td>{{ $sn }}</td>
            <td>{{ $item->name }}</td>
            <td>{!! $Bh::email_f($item->email) !!}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $IETs::getName($item->income_expense_type_id) }}</td>
            <td>{{ $item->terms_of_payment }}</td>
            <td>{!! $Bh::date_f($item->created_at) !!}</td>
            {{-- ACTIONS --}}
            <x-table.table-action :item="$item" :actions="['edit', 'delete']" />
          </tr>
          @empty
          <x-table.table-no-records />
          @endforelse
        </x-table.table-wrapper>
        {{-- --}}
        <x-table.table-pagination-with-selected />
      </form>
    </div>
  </div>
</div>
@endsection