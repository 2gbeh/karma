@props(['label', 'name', 'defaults' => [], 'colspan' => 12 ])

<div class="col-sm-{{ $colspan }}">
  <div class="form-group form-float">
    <div class="form-line">
      {{-- INPUT --}}
      {{-- @dd($defaults) --}}
      <input {{ $attributes->class(['form-control'])->merge(['type' => 'text', 'name' => $name, 'value' => old($name,
      $defaults[$name] ?? null),
      ]) }} />

      {{-- LABEL --}}
      <label class="form-label">{{ $label }}</label>
    </div>
  </div>
</div>