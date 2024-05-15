@inject('Ah', 'App\Helpers\ArrayHelper')
@props(['label', 'name', 'options', 'colspan' => 12])

@php
$props = (object)['is_assoc' => !array_is_list($options)];
@endphp

<div class="col-sm-{{ $colspan }}">
  <div class="form-group form-float">
    <div class="form-line">
      <select data-live-search="true" {{ $attributes->class(['form-control show-tick'])->merge(['name' => $name]) }}
        >
        {{-- LABEL --}}
        <option value="0" hidden>{{ $label }}</option>
        
        {{-- OPTIONS --}}
        @foreach ($options as $value => $text)
        <option {{ $Ah::optionAttribs($name, $props->is_assoc ? $value : $text) }}>
          {{ $text }}
        </option>
        @endforeach
      </select>
    </div>
  </div>
</div>