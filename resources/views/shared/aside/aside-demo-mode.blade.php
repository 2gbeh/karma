@if (env('DEMO_MODE') == false && env('INITIAL_BALANCE_ACTIVITY') == true)
{{-- Opening Balance Start --}}
<li @if (config('role_manage.InitialIncomeExpenseHeadBalance.All')==0 and
  config('role_manage.InitialIncomeExpenseHeadBalance.TrashShow')==0 and
  config('role_manage.InitialIncomeExpenseHeadBalance.Create')==0 and
  config('role_manage.InitialBankCashBalance.All')==0 and config('role_manage.InitialBankCashBalance.TrashShow')==0 and
  config('role_manage.InitialBankCashBalance.Create')==0) class="dis-none" @endif 
  @if  (Request::url()===route('initial_bank_cash_balance') or Request::url()===route('initial_bank_cash_balance.create') or
  Request::url()===route('initial_bank_cash_balance.trashed') or
  Request::url()===route('initial_bank_cash_balance.active.search') or
  Request::url()===route('initial_bank_cash_balance.trashed.search') or
  Request::url()===route('initial_income_expense_head_balance') or
  Request::url()===route('initial_income_expense_head_balance.create') or
  Request::url()===route('initial_income_expense_head_balance.trashed') or
  Request::url()===route('initial_income_expense_head_balance.active.search') or
  Request::url()===route('initial_income_expense_head_balance.trashed.search')) class="active " @endif>
  <a class="menu-toggle" href="javascript:void(0);">
    <i class="fas fa-balance-scale"></i>
    <span>Initial Balance</span>
  </a>
  <ul class="ml-menu">
    {{-- Initial Bank Cash Balance Start --}}
    <li @if (config('role_manage.InitialBankCashBalance.All')==0 and
      config('role_manage.InitialBankCashBalance.TrashShow')==0 and
      config('role_manage.InitialBankCashBalance.Create')==0) class="dis-none" @endif 
      @if      (Request::url()===route('initial_bank_cash_balance') or Request::url()===route('initial_bank_cash_balance.create')
      or Request::url()===route('initial_bank_cash_balance.trashed') or
      Request::url()===route('initial_bank_cash_balance.active.search') or
      Request::url()===route('initial_bank_cash_balance.trashed.search')) class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <span>Bank or Cash </span>
      </a>
      <ul class="ml-menu">
        <li @if (Request::url()===route('initial_bank_cash_balance') or
          Request::url()===route('initial_bank_cash_balance.active.search')) class="active" @endif>
          <a @if (config('role_manage.InitialBankCashBalance.All')==0) class="dis-none" @endif
            href="{{ route('initial_bank_cash_balance') }}">All</a>
        </li>
        <li @if (Request::url()===route('initial_bank_cash_balance.create')) class="active" @endif>
          <a @if (config('role_manage.InitialBankCashBalance.Create')==0) class="dis-none" @endif
            href="{{ route('initial_bank_cash_balance.create') }}">Create</a>
        </li>
        <li @if (Request::url()===route('initial_bank_cash_balance.trashed') or
          Request::url()===route('initial_bank_cash_balance.trashed.search')) class="active" @endif>
          <a @if (config('role_manage.InitialBankCashBalance.TrashShow')==0) class="dis-none" @endif
            href="{{ route('initial_bank_cash_balance.trashed') }}">Trashed</a>
        </li>
      </ul>
    </li>
    {{-- Initial Bank Cash Balance End --}}
    {{-- initial_income_expense_head_balance Start --}}
    <li @if (config('role_manage.InitialIncomeExpenseHeadBalance.All')==0 and
      config('role_manage.InitialIncomeExpenseHeadBalance.TrashShow')==0 and
      config('role_manage.InitialIncomeExpenseHeadBalance.Create')==0) class="dis-none" @endif 
      @if      (Request::url()===route('initial_income_expense_head_balance') or
      Request::url()===route('initial_income_expense_head_balance.create') or
      Request::url()===route('initial_income_expense_head_balance.trashed') or
      Request::url()===route('initial_income_expense_head_balance.active.search') or
      Request::url()===route('initial_income_expense_head_balance.trashed.search')) class="active " @endif>
      <a class="menu-toggle " href="javascript:void(0);">
        <span>Ledger</span>
      </a>
      <ul class="ml-menu">
        <li @if (Request::url()===route('initial_income_expense_head_balance') or
          Request::url()===route('initial_income_expense_head_balance.active.search')) class="active" @endif>
          <a @if (config('role_manage.InitialIncomeExpenseHeadBalance.All')==0) class="dis-none" @endif
            href="{{ route('initial_income_expense_head_balance') }}">All</a>
        </li>
        <li @if (Request::url()===route('initial_income_expense_head_balance.create')) class="active" @endif>
          <a @if (config('role_manage.InitialIncomeExpenseHeadBalance.Create')==0) class="dis-none" @endif
            href="{{ route('initial_income_expense_head_balance.create') }}">Create</a>
        </li>
        <li @if (Request::url()===route('initial_income_expense_head_balance.trashed') or
          Request::url()===route('initial_income_expense_head_balance.trashed.search')) class="active" @endif>
          <a @if (config('role_manage.InitialIncomeExpenseHeadBalance.TrashShow')==0) class="dis-none" @endif
            href="{{ route('initial_income_expense_head_balance.trashed') }}">Trashed</a>
        </li>
      </ul>
    </li>
    {{-- initial_income_expense_head_balance End --}}
  </ul>
</li>
@endif