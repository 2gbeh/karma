<li @if (config('role_manage.BankCash.All')==0 and config('role_manage.BankCash.TrashShow')==0 and
  config('role_manage.BankCash.Create')==0) class="dis-none" @endif @if (Request::url()===route('bank_cash') or
  Request::url()===route('bank_cash.create') or Request::url()===route('bank_cash.trashed') or
  Request::url()===route('bank_cash.active.search') or Request::url()===route('bank_cash.trashed.search'))
  class="active " @endif>
  <a class="menu-toggle " href="javascript:void(0);">
    <i class="fas fa-university"></i>
    <span>{{ __('root.menu.bank_cash') }}</span>
  </a>
  <ul class="ml-menu">
    <li @if (Request::url()===route('bank_cash') or Request::url()===route('bank_cash.active.search')) class="active"
      @endif>
      <a @if (config('role_manage.BankCash.All')==0) class="dis-none" @endif href="{{ route('bank_cash') }}">{{
        __('root.menu.bank_cash_all') }}</a>
    </li>
    <li @if (Request::url()===route('bank_cash.create')) class="active" @endif>
      <a @if (config('role_manage.BankCash.Create')==0) class="dis-none" @endif
        href="{{ route('bank_cash.create') }}">{{ __('root.menu.bank_cash_create') }}</a>
    </li>
    <li @if (Request::url()===route('bank_cash.trashed') or Request::url()===route('bank_cash.trashed.search'))
      class="active" @endif>
      <a @if (config('role_manage.BankCash.TrashShow')==0) class="dis-none" @endif
        href="{{ route('bank_cash.trashed') }}">{{ __('root.menu.bank_cash_trashed') }}</a>
    </li>
  </ul>
</li>