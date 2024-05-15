@php
$is_form = $as == 'form';
$props = (object)[
'left' => [
'href' => $is_form ? url()->previous() : url()->current() . '/create',
'text' => $is_form ? 'Back' : 'Add New',
'icon' => $is_form ? 'fas fa-chevron-left' : 'fas fa-plus',
],
'right' => [
'icon' => $is_form ? 'fas fa-plus-circle' : 'fas fa-list',
],
];
@endphp

{{-- LEFT SIDE --}}
<div class="block-header @if ($is_rtl) pull-right @else pull-left @endif">
  <a class="btn btn-sm btn-info waves-effect" href="{{ $props->left['href'] }}">
    <i class="{{ $props->left['icon'] }}" style="font-size:12px;float:left;margin-top:1px;"></i> &nbsp;
    {{ $props->left['text'] }}
  </a>
</div>

{{-- RIGHT SIDE --}}
<ol class="breadcrumb breadcrumb-col-cyan @if ($is_rtl) pull-left  @else pull-right @endif">
  <li>
    <a href="{{ route('dashboard') }}">
      <i class="fas fa-home"></i> &nbsp;
      Home
    </a>
  </li>
  <li>
    <a href="" title="Reload">
      <i class="fas fa-folder-open"></i> &nbsp;
      {{ $level }}
    </a>
  </li>
  <li class="active" style="cursor:default">
    <i class="{{ $props->right['icon']}}"></i> &nbsp;
    {{ $location }}
  </li>
</ol>