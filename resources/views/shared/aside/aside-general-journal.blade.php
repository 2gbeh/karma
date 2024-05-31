@php
$props = (object)[
'menu' => __('aside-lang.general-journal.resource'),
'menu_items' => [],
'is_active' => $Bh::activeMenuItem(['general-journal.*']),
];
@endphp

{{-- Customers --}}
<li @class(['active'=> $props->is_active])>
  <a class="menu-toggle" href="javascript:void(0);">
    <i class="fas fa-journal-whills"></i>
    <span>{{ $props->menu }} </span>
  </a>
  <ul class="ml-menu">
    @foreach ($props->menu_items as $item)
    <li @class(['active'=> $Bh::activeMenuItem($item[0])])>
      <a href="{{ route($item[0]) }}" style="white-space:nowrap;">{{ __($item[1]) }}</a>
    </li>
    @endforeach
  </ul>
</li>

{{-- /Customers --}}