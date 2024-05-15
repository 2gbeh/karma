@props(['withCheckbox' => true, 'thead'])

<div class="body table-responsive">
  <table class="table table-hover table-bordered table-sm">
    <thead>
      <tr>
        @isset ($withCheckbox)
        <x-table.table-checkbox as="thead" />
        @endisset
        {{-- --}}
        @foreach ($thead as $th)
        <th>{{ $th }}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      {{ $slot }}
    </tbody>
    <thead>
      <tr>
        @isset ($withCheckbox)
        <x-table.table-checkbox as="tfoot" />
        @endisset
        {{-- --}}
        @foreach ($thead as $th)
        <th>{{ $th }}</th>
        @endforeach
      </tr>
    </thead>
  </table>
</div>