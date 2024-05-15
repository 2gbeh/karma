<li @if ($AccountsShow==false and $generalShow==false) class="dis-none" @endif @if
  (Request::url()===route('reports.accounts.ledger') or Request::url()===route('reports.accounts.trial_balance') or
  Request::url()===route('reports.accounts.cost_of_revenue') or
  Request::url()===route('reports.accounts.profit_or_loss_account') or
  Request::url()===route('reports.accounts.retained_earnings') or
  Request::url()===route('reports.accounts.fixed_asset_schedule') or
  Request::url()===route('reports.accounts.balance_sheet') or Request::url()===route('reports.accounts.receive_payment')
  or Request::url()===route('reports.accounts.notes') or Request::url()===route('reports.accounts.cash_flow') or
  Request::url()===route('reports.general.branch') or Request::url()===route('reports.general.ledger.type') or
  Request::url()===route('reports.general.bank_cash') or Request::url()===route('reports.general.voucher'))
  class="active " @endif>
  <a class="menu-toggle" href="javascript:void(0);">
    <i class="fas fa-receipt"></i>
    <span>{{ __('root.menu.report') }}</span>
  </a>
  <ul class="ml-menu">
    {{-- Accounts Report Start --}}
    <li @if ($AccountsShow==false) class="dis-none" @endif @if (Request::url()===route('reports.accounts.ledger') or
      Request::url()===route('reports.accounts.trial_balance') or
      Request::url()===route('reports.accounts.cost_of_revenue') or
      Request::url()===route('reports.accounts.profit_or_loss_account') or
      Request::url()===route('reports.accounts.retained_earnings') or
      Request::url()===route('reports.accounts.fixed_asset_schedule') or
      Request::url()===route('reports.accounts.balance_sheet') or
      Request::url()===route('reports.accounts.receive_payment') or Request::url()===route('reports.accounts.notes') or
      Request::url()===route('reports.accounts.cash_flow')) class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <span>{{ __('root.menu.accounts') }} </span>
      </a>
      <ul class="ml-menu">
        <li @if (config('role_manage.Ledger.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.ledger')) class="active " @endif>
          <a href="{{ route('reports.accounts.ledger') }}">{{ __('root.menu.ledger') }}</a>
        </li>
        <li @if (config('role_manage.TrialBalance.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.trial_balance')) class="active " @endif>
          <a href="{{ route('reports.accounts.trial_balance') }}">{{
            __('root.menu.trial_balance') }}</a>
        </li>
        <li @if (config('role_manage.CostOfRevenue.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.cost_of_revenue')) class="active " @endif>
          <a href="{{ route('reports.accounts.cost_of_revenue') }}">{{
            __('root.menu.cost_of_revenue') }}</a>
        </li>
        <li @if (config('role_manage.ProfitOrLossAccount.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.profit_or_loss_account')) class="active " @endif>
          <a href="{{ route('reports.accounts.profit_or_loss_account') }}">{{
            __('root.menu.profit_or_loss_account') }}</a>
        </li>
        <li @if (config('role_manage.RetainedEarning.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.retained_earnings')) class="active " @endif>
          <a href="{{ route('reports.accounts.retained_earnings') }}">{{
            __('root.menu.retained_earnings') }}</a>
        </li>
        <li @if (config('role_manage.FixedAssetsSchedule.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.fixed_asset_schedule')) class="active " @endif>
          <a href="{{ route('reports.accounts.fixed_asset_schedule') }}">{{
            __('root.menu.fixed_asset_schedule') }}</a>
        </li>
        <li @if (config('role_manage.StatementOfFinancialPosition.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.balance_sheet')) class="active " @endif>
          <a href=" {{ route('reports.accounts.balance_sheet') }} ">{{
            __('root.menu.balance_sheet') }}</a>
        </li>

        <li @if (config('role_manage.CashFlow.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.cash_flow')) class="active" @endif>
          <a href="{{ route('reports.accounts.cash_flow') }}">{{ __('root.menu.cash_flow')
            }}</a>
        </li>

        <li @if (config('role_manage.ReceiveAndPayment.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.receive_payment')) class="active " @endif>
          <a href="{{ route('reports.accounts.receive_payment') }}">{{
            __('root.menu.receive_payment') }}</a>
        </li>
        <li @if (config('role_manage.Notes.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.accounts.notes')) class="active " @endif>
          <a href="{{ route('reports.accounts.notes') }}">{{ __('root.menu.notes') }}</a>
        </li>
      </ul>
    </li>

    {{-- Accounts Report End --}}

    {{-- General Report Start --}}
    <li @if ($generalShow==false) class="dis-none" @endif @if (Request::url()===route('reports.general.branch') or
      Request::url()===route('reports.general.ledger.type') or Request::url()===route('reports.general.bank_cash') or
      Request::url()===route('reports.general.voucher')) class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <span>{{ __('root.menu.general') }}</span>
      </a>

      <ul class="ml-menu">
        <li @if (config('role_manage.GeneralBranch.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.general.branch')) class="active " @endif>
          <a href="{{ route('reports.general.branch') }}">{{ __('root.menu.general_branch')
            }}</a>
        </li>

        <li @if (config('role_manage.GeneralLedger.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.general.ledger.type')) class="active " @endif>
          <a href="{{ route('reports.general.ledger.type') }}">{{
            __('root.menu.general_ledger') }}</a>
        </li>

        <li @if (config('role_manage.GeneralBankCash.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.general.bank_cash')) class="active " @endif>
          <a href="{{ route('reports.general.bank_cash') }}">{{
            __('root.menu.general_bank_cash') }}</a>
        </li>

        <li @if (config('role_manage.GeneralVoucher.All')==0) class="dis-none" @endif @if
          (Request::url()===route('reports.general.voucher')) class="active " @endif>
          <a href="{{ route('reports.general.voucher') }}">{{ __('root.menu.general_voucher')
            }}</a>
        </li>
      </ul>
    </li>
    {{-- General Report End --}}
  </ul>
</li>