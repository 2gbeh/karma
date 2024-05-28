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
      <td>{{ $item->item }}</td>
      <td>{{ $item->description }}</td>
      <td>{{ number_format($item->rate) }}</td>
      <td>1</td>
      <td>{{ number_format($item->rate) }}</td>
      {{-- ACTIONS --}}
      <x-table.table-action :item="$item" :actions="['delete']" />
    </tr>
    @empty
    <x-table.table-no-records />
    @endforelse
  </x-table.table-wrapper>
</form>