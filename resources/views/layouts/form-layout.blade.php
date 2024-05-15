@extends('layouts.app')

@section('title')
@yield('subtitle')
@endsection()

@section('top-bar')
@includeIf('shared.header')
@endsection

@section('left-sidebar')
@includeIf('shared.sidebar')
@endsection

@section('content')
<section @if ($is_rtl) dir="rtl" @endif class="content">
  <div class="container-fluid">
    @yield('container')
  </div>
</section>
@endsection

@push('include-css')
<!-- Colorpicker Css -->
<link href="{{ asset('asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />
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
<!-- noUISlider Css -->
<link href="{{ asset('asset/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />
<!-- Sweet Alert Css -->
<link href="{{ asset('asset/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endpush

@push('include-js')
<!-- Moment Plugin Js -->
<script src="{{ asset('asset/plugins/momentjs/moment.js') }}"></script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
</script>
<!-- Bootstrap Datepicker Plugin Js -->
<script src="{{ asset('asset/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<!-- Sweet Alert Plugin Js -->
<script src="{{ asset('asset/plugins/sweetalert/sweetalert.min.js') }}"></script>
<!-- Autosize Plugin Js -->
<script src="{{ asset('asset/plugins/autosize/autosize.js') }}"></script>
<script src="{{ asset('asset/js/pages/forms/basic-form-elements.js') }}"></script>
<!-- -->
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

// Validation and calculation
var UiController = (function() {
    var DOMString = {
        submit_form: 'form.form',
        name: 'input[name=name]',
    };
    return {
        getDOMString: function() {
            return DOMString;
        },
        getFields: function() {
            return {
                get_form: document.querySelector(DOMString.submit_form),
                get_name: document.querySelector(DOMString.name),
            }
        },
        getInputsValue: function() {
            var Fields = this.getFields();
            return {
                name: Fields.get_name.value == "" ? 0 : Fields.get_name.value,
            }
        },
    }
})();

var MainController = (function(UICnt) {
    var DOMString = UICnt.getDOMString();
    var Fields = UICnt.getFields();
    var setUpEventListner = function() {
        Fields.get_form.addEventListener('submit', validation);
    };
    var validation = function(e) {
        var input_values, Fields;
        input_values = UICnt.getInputsValue();
        Fields = UICnt.getFields();
        var FieldName1 = " Name";
        if (input_values.name == 0) {
            toastr["error"]('Branch Name Is Required');
            e.preventDefault();
        }
    };
    return {
        init: function() {
            console.log("App Is running");
            setUpEventListner();
        }
    }
})(UiController);

MainController.init();
</script>
@endpush