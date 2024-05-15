@props(['label', 'name', 'colspan' => 12])

<div class="col-sm-{{ $colspan }}">
  <div class="form-group form-float">
    <div class="form-line">      
      {{-- INPUT --}}
      <input {{ $attributes->class(['form-control'])->merge(['type' => 'text', 'name' => $name, 'value' => old($name),
      ]) }} />
      
      {{-- LABEL --}}
      <label class="form-label">{{ $label }}</label>
    </div>
  </div>
</div>