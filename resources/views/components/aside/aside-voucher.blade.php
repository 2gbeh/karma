<li @if (config('role_manage.CrVoucher.All')==0 and config('role_manage.CrVoucher.TrashShow')==0 and
  config('role_manage.CrVoucher.Create')==0 and config('role_manage.DrVoucher.All')==0 and
  config('role_manage.DrVoucher.TrashShow')==0 and config('role_manage.DrVoucher.Create')==0 and
  config('role_manage.JnlVoucher.All')==0 and config('role_manage.JnlVoucher.TrashShow')==0 and
  config('role_manage.JnlVoucher.Create')==0 and config('role_manage.ContraVoucher.All')==0 and
  config('role_manage.ContraVoucher.TrashShow')==0 and config('role_manage.ContraVoucher.Create')==0) class="dis-none"
  @endif @if (Request::url()===route('dr_voucher') or Request::url()===route('dr_voucher.create') or
  Request::url()===route('dr_voucher.trashed') or Request::url()===route('dr_voucher.active.search') or
  Request::url()===route('dr_voucher.trashed.search') or Request::url()===route('cr_voucher') or
  Request::url()===route('cr_voucher.create') or Request::url()===route('cr_voucher.trashed') or
  Request::url()===route('cr_voucher.active.search') or Request::url()===route('cr_voucher.trashed.search') or
  Request::url()===route('jnl_voucher') or Request::url()===route('jnl_voucher.create') or
  Request::url()===route('jnl_voucher.trashed') or Request::url()===route('jnl_voucher.active.search') or
  Request::url()===route('jnl_voucher.trashed.search') or Request::url()===route('contra_voucher') or
  Request::url()===route('contra_voucher.create') or Request::url()===route('contra_voucher.trashed') or
  Request::url()===route('contra_voucher.active.search') or Request::url()===route('contra_voucher.trashed.search'))
  class="active " @endif>
  <a class="menu-toggle" href="javascript:void(0);">
    {{-- <i class="material-icons">account_balance_wallet</i> --}}
    <i class="fas fa-ticket-alt"></i>
    <span>{{ __('root.menu.voucher') }}</span>
  </a>

  <ul class="ml-menu">

    {{-- Cr Voucher Start --}}

    <li @if (config('role_manage.CrVoucher.All')==0 and config('role_manage.CrVoucher.TrashShow')==0 and
      config('role_manage.CrVoucher.Create')==0) class="dis-none" @endif @if (Request::url()===route('cr_voucher') or
      Request::url()===route('cr_voucher.create') or Request::url()===route('cr_voucher.trashed') or
      Request::url()===route('cr_voucher.active.search') or Request::url()===route('cr_voucher.trashed.search'))
      class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <i class="fas fa-arrow-right"></i>
        <span>{{ __('root.menu.voucher_credit') }}</span>
      </a>

      <ul class="ml-menu">
        <li @if (Request::url()===route('cr_voucher') or Request::url()===route('cr_voucher.active.search'))
          class="active" @endif>
          <a @if (config('role_manage.CrVoucher.All')==0) class="dis-none" @endif href="{{ route('cr_voucher') }}">{{
            __('root.menu.voucher_all') }}</a>
        </li>
        <li @if (Request::url()===route('cr_voucher.create')) class="active" @endif>
          <a @if (config('role_manage.CrVoucher.Create')==0) class="dis-none" @endif
            href="{{ route('cr_voucher.create') }}">{{ __('root.menu.voucher_create') }}</a>
        </li>
        <li @if (Request::url()===route('cr_voucher.trashed') or Request::url()===route('cr_voucher.trashed.search'))
          class="active" @endif>
          <a @if (config('role_manage.CrVoucher.TrashShow')==0) class="dis-none" @endif
            href="{{ route('cr_voucher.trashed') }}">{{ __('root.menu.voucher_trashed')
            }}</a>
        </li>
      </ul>
    </li>

    {{-- cr Voucher End --}}

    {{-- Dr Voucher Start --}}

    <li @if (config('role_manage.DrVoucher.All')==0 and config('role_manage.DrVoucher.TrashShow')==0 and
      config('role_manage.DrVoucher.Create')==0) class="dis-none" @endif @if (Request::url()===route('dr_voucher') or
      Request::url()===route('dr_voucher.create') or Request::url()===route('dr_voucher.trashed') or
      Request::url()===route('dr_voucher.active.search') or Request::url()===route('dr_voucher.trashed.search'))
      class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <i class="fas fa-arrow-left"></i>
        <span>{{ __('root.menu.debit') }}</span>
      </a>

      <ul class="ml-menu">
        <li @if (Request::url()===route('dr_voucher') or Request::url()===route('dr_voucher.active.search'))
          class="active" @endif>
          <a @if (config('role_manage.DrVoucher.All')==0) class="dis-none" @endif href="{{ route('dr_voucher') }}">{{
            __('root.menu.debit_all') }}</a>
        </li>
        <li @if (Request::url()===route('dr_voucher.create')) class="active" @endif>
          <a @if (config('role_manage.DrVoucher.Create')==0) class="dis-none" @endif
            href="{{ route('dr_voucher.create') }}">{{ __('root.menu.debit_create') }}</a>
        </li>
        <li @if (Request::url()===route('dr_voucher.trashed') or Request::url()===route('dr_voucher.trashed.search'))
          class="active" @endif>
          <a @if (config('role_manage.DrVoucher.TrashShow')==0) class="dis-none" @endif
            href="{{ route('dr_voucher.trashed') }}">{{ __('root.menu.debit_trashed') }}</a>
        </li>
      </ul>
    </li>

    {{-- Dr Voucher End --}}


    {{-- Jnl Voucher Start --}}

    <li @if (config('role_manage.JnlVoucher.All')==0 and config('role_manage.JnlVoucher.TrashShow')==0 and
      config('role_manage.JnlVoucher.Create')==0) class="dis-none" @endif @if (Request::url()===route('jnl_voucher') or
      Request::url()===route('jnl_voucher.create') or Request::url()===route('jnl_voucher.trashed') or
      Request::url()===route('jnl_voucher.active.search') or Request::url()===route('jnl_voucher.trashed.search'))
      class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <i class="fas fa-arrows-alt-h"></i>
        <span>{{ __('root.menu.journal') }}</span>
      </a>

      <ul class="ml-menu">
        <li @if (Request::url()===route('jnl_voucher') or Request::url()===route('jnl_voucher.active.search'))
          class="active" @endif>
          <a @if (config('role_manage.JnlVoucher.All')==0) class="dis-none" @endif href="{{ route('jnl_voucher') }}">{{
            __('root.menu.journal_all') }}</a>
        </li>
        <li @if (Request::url()===route('jnl_voucher.create')) class="active" @endif>
          <a @if (config('role_manage.JnlVoucher.Create')==0) class="dis-none" @endif
            href="{{ route('jnl_voucher.create') }}">{{ __('root.menu.journal_create')
            }}</a>
        </li>
        <li @if (Request::url()===route('jnl_voucher.trashed') or Request::url()===route('jnl_voucher.trashed.search'))
          class="active" @endif>
          <a @if (config('role_manage.JnlVoucher.TrashShow')==0) class="dis-none" @endif
            href="{{ route('jnl_voucher.trashed') }}">{{ __('root.menu.journal_trashed')
            }}</a>
        </li>
      </ul>
    </li>

    {{-- Jnl Voucher End --}}

    {{-- contra_voucher Start --}}

    <li @if (config('role_manage.ContraVoucher.All')==0 and config('role_manage.ContraVoucher.TrashShow')==0 and
      config('role_manage.ContraVoucher.Create')==0) class="dis-none" @endif @if
      (Request::url()===route('contra_voucher') or Request::url()===route('contra_voucher.create') or
      Request::url()===route('contra_voucher.trashed') or Request::url()===route('contra_voucher.active.search') or
      Request::url()===route('contra_voucher.trashed.search')) class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <i class="fas fa-arrows-alt-h"></i>
        <span>{{ __('root.menu.contra') }}</span>
      </a>

      <ul class="ml-menu">
        <li @if (Request::url()===route('contra_voucher') or Request::url()===route('contra_voucher.active.search'))
          class="active" @endif>
          <a @if (config('role_manage.ContraVoucher.All')==0) class="dis-none" @endif
            href="{{ route('contra_voucher') }}">{{ __('root.menu.contra_all') }}</a>
        </li>
        <li @if (Request::url()===route('contra_voucher.create')) class="active" @endif>
          <a @if (config('role_manage.ContraVoucher.Create')==0) class="dis-none" @endif
            href="{{ route('contra_voucher.create') }}">{{ __('root.menu.contra_create')
            }}</a>
        </li>
        <li @if (Request::url()===route('contra_voucher.trashed') or
          Request::url()===route('contra_voucher.trashed.search')) class="active" @endif>
          <a @if (config('role_manage.ContraVoucher.TrashShow')==0) class="dis-none" @endif
            href="{{ route('contra_voucher.trashed') }}">{{ __('root.menu.contra_trashed')
            }}</a>
        </li>
      </ul>
    </li>

    {{-- contra_voucher End --}}

  </ul>
</li>