<section>
  <aside id="leftsidebar" class="sidebar">
    <div class="menu">
      <ul class="list">
        <li @if (Request::url()===route('dashboard')) class="active" @endif>
          <a href="{{ route('dashboard') }}">
            <i class="fas fa-home"></i>
            <span>{{ __('root.menu.dashboard') }}</span>
          </a>
        </li>
        <x-aside.aside-branch />
        <x-aside.aside-ledger />
        <x-aside.aside-banks />
        <x-aside.aside-demo-mode />      
        <x-aside.aside-voucher />
        <?php            
          $AccountsShow = (config('role_manage.Ledger.All') or config('role_manage.TrialBalance.All') or config('role_manage.CostOfRevenue.All') or config('role_manage.ProfitOrLossAccount.All') or config('role_manage.RetainedEarning.All') or config('role_manage.FixedAssetsSchedule.All') or config('role_manage.StatementOfFinancialPosition.All') or config('role_manage.CashFlow.All') or config('role_manage.ReceiveAndPayment.All') or config('role_manage.Notes.All'));
          $generalShow = (config('role_manage.GeneralBranch.All') or config('role_manage.GeneralLedger.All') or config('role_manage.GeneralBankCash.All') or config('role_manage.GeneralVoucher.All'));
        ?>
        <x-aside.aside-reports />
        <x-aside.aside-language />
        {{-- --}}
        <x-aside.aside-inventory />
        <x-aside.aside-customers />
        <x-aside.aside-vendors />
        {{-- --}}
        <x-aside.aside-users />
        <x-aside.aside-roles />
        <x-aside.aside-settings />
      </ul>
    </div>

    {{-- FOOTER --}}
    <div class="legal">
      <div class="copyright">
        {{ config('settings.developed_label') }} <a target="_blank" href="{{ config('settings.developed_link') }}">{{
          config('settings.developed_by') }}</a>
      </div>
      <div class="version">
        <b>Version: </b> {{ config('settings.version') }}
      </div>
    </div>
  </aside>
</section>