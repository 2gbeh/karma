@extends('layouts.app')

@section('title')
{{ config('settings.company_name') }} -> {{ __('root.reports.notes') }}
@stop

@section('top-bar')
@include('shared.header')
@stop
@section('left-sidebar')
@include('shared.sidebar')
@stop
@section('content')
<section @if ($is_rtl) dir="rtl" @endif class="content">
    <div class="header">
        <h2 class="text-center">{{ __('root.reports.notes') }}</h2>
        <br>
    </div>
    <div class="container-fluid">
        <!-- Inline Layout | With Floating Label -->
        <div class="row clearfix">
            <!-- Ledger Type Wise Start -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>
                            {{ __('root.reports.ledger_type_wise') }}
                            <small>{{ __('root.reports.show_all') }}</small>
                        </h2>
                    </div>
                    <br>
                    <div class="body">
                        <div class="row clearfix">
                            <form class="form" id="form_validation" method="post"
                                action="{{ route('reports.accounts.notes.type_wise.report') }}">
                                {{ csrf_field() }}
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select data-live-search="true" class="form-control show-tick"
                                                name="income_expense_type_id">
                                                <option value="">{{ __('root.reports.select_ledger_type_name') }}
                                                </option>
                                                @foreach ($income_expense_types as $Type)
                                                <option value="{{ $Type->id }}">{{ $Type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select data-live-search="true" class="form-control show-tick"
                                                name="branch_id">
                                                <option value="">{{ __('root.reports.select_branch_name') }}
                                                </option>
                                                @foreach ($branches as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="card-inside-title">{{ __('root.reports.period') }}</h2>
                                    <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                        <div class="form-line">
                                            <input autocomplete="off" name="start_from" type="text" class="form-control"
                                                placeholder="{{ __('root.reports.date_start') }}...">
                                        </div>
                                        <span class="input-group-addon">{{ __('root.reports.to') }}</span>
                                        <div class="form-line">
                                            <input autocomplete="off" name="start_to" type="text" class="form-control"
                                                placeholder="{{ __('root.reports.date_end') }}...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-line">
                                        <input formtarget="_blank" name="action" value="Show" type="submit"
                                            class="btn btn-primary m-t-15 waves-effect">
                                        <input name="action" value="Pdf" type="submit"
                                            class="btn btn-primary m-t-15 waves-effect">
                                        <input name="action" value="Excel" type="submit"
                                            class="btn btn-primary m-t-15 waves-effect">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ledger Type End -->

            <!-- Ledger Group Start -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>
                            {{ __('root.reports.ledger_group_wise') }}
                            <small>{{ __('root.reports.show_all') }}</small>
                        </h2>
                    </div>
                    <br>
                    <div class="body">
                        <div class="row clearfix">
                            <form class="form1" method="post"
                                action="{{ route('reports.accounts.notes.group_wise.report') }}">
                                {{ csrf_field() }}
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select data-live-search="true" class="form-control show-tick"
                                                name="income_expense_group_id">
                                                <option value="">
                                                    {{ __('root.reports.select_ledger_group_name') }}</option>
                                                @foreach ($income_expense_groups as $Group)
                                                <option value="{{ $Group->id }}">{{ $Group->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select data-live-search="true" class="form-control show-tick"
                                                name="branch_id">
                                                <option value="">{{ __('root.reports.select_branch_name') }}
                                                </option>
                                                @foreach ($branches as $Branch)
                                                <option value="{{ $Branch->id }}">{{ $Branch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="card-inside-title">{{ __('root.reports.period') }}</h2>
                                    <div class="input-daterange input-group" id="bs_datepicker_range_container2">
                                        <div class="form-line">
                                            <input autocomplete="off" name="start_from1" type="text"
                                                class="form-control"
                                                placeholder="{{ __('root.reports.date_start') }}...">
                                        </div>
                                        <span class="input-group-addon">{{ __('root.reports.to') }}</span>
                                        <div class="form-line">
                                            <input autocomplete="off" name="start_to1" type="text" class="form-control"
                                                placeholder="{{ __('root.reports.date_end') }}...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-line">
                                        <input formtarget="_blank" name="action" value="Show" type="submit"
                                            class="btn btn-primary m-t-15 waves-effect">
                                        <input name="action" value="Pdf" type="submit"
                                            class="btn btn-primary m-t-15 waves-effect">
                                        <input name="action" value="Excel" type="submit"
                                            class="btn btn-primary m-t-15 waves-effect">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ledger Group End -->
        </div>
    </div>
</section>
@stop

@push('include-css')
<!-- Dropzone Css -->
<link href="{{ asset('asset/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
<!-- Multi Select Css -->
<link href="{{ asset('asset/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
<!-- Bootstrap Spinner Css -->
<link href="{{ asset('asset/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">
<!-- Bootstrap Tagsinput Css -->
<link href="{{ asset('asset/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="{{ asset('asset/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
<!-- Bootstrap Material Datetime Picker Css -->
<link href="{{ asset('asset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
    rel="stylesheet" />
<!-- Bootstrap DatePicker Css -->
<link href="{{ asset('asset/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
@endpush

@push('include-js')
<!-- Moment Plugin Js -->
<script src="{{ asset('asset/plugins/momentjs/moment.js') }}"></script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
</script>
<!-- Bootstrap Datepicker Plugin Js -->
<script src="{{ asset('asset/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<!-- Autosize Plugin Js -->
<script src="{{ asset('asset/plugins/autosize/autosize.js') }}"></script>
<script src="{{ asset('asset/js/pages/forms/basic-form-elements.js') }}"></script>
<script>
    @if (Session::has('success'))
            toastr["success"]('{{ Session::get('success') }}');
        @endif
        @if (Session::has('error'))
            toastr["error"]('{{ Session::get('error') }}');
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr["error"]('{{ $error }}');
            @endforeach
        @endif
</script>
@endpush