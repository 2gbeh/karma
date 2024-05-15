{{-- Customers --}}
<li>
  <a class="menu-toggle " href="javascript:void(0);">
    <i class="fas fa-users"></i>
    <span>{{ __('aside-lang.customers.resource') }} </span>
  </a>
  <ul class="ml-menu">
    <li>
      <a href="{{ route('customers.create') }}">{{
        __('aside-lang.customers.create.customer') }}</a>
    </li>
    <li>
      <a href="{{ route('customers.index') }}">{{
        __('aside-lang.customers.index') }}</a>
    </li>
    <li>
      <a href="{{ route('customer-invoices.create') }}">{{
        __('aside-lang.customers.create.invoice') }}</a>
    </li>
    <li>
      <a href="{{ route('customer-receipts.create') }}">{{
        __('aside-lang.customers.create.receipt') }}</a>
    </li>
  </ul>
</li>

{{-- /Customers --}}