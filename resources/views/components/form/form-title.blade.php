<h2 style="margin-bottom: 10px">
  {{ $h1 }}
  {{-- SUBTITLE --}}
  @isset ($p)
  <small>{{ $as == "form"? "Fill in the {$p} information below" : "" }}</small>
  @endisset
</h2>