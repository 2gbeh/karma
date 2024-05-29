@inject('Bh', 'App\Helpers\BladeHelper')
@props(['label', 'name', 'defaults' => [], 'options' => [], 'colspan' => 12])

@php
$props = (object)['options_is_assoc' => !array_is_list($options)];
@endphp

<div class="col-sm-{{ $colspan }}">
  <div class="form-group form-float">
    <div class="form-line">
      <select data-live-search="true" {{ $attributes->class(['form-control show-tick'])->merge(['name' => $name]) }}
        >
        {{-- LABEL --}}
        <option value="0" hidden>{{ $label }}</option>

        {{-- OPTIONS --}}
        @foreach ($options as $i => $text)
        @php $value = $props->options_is_assoc ? $i : $text @endphp
        <option {{ $Bh::optionAttribs($name, $value, $defaults) }}>
          {{ $text }}
        </option>
        @endforeach
      </select>
    </div>
  </div>
</div>