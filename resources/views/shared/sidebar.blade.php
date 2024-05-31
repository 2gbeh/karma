@inject('Bh', 'App\Helpers\BladeHelper')

<section>
  <aside id="leftsidebar" class="sidebar">
    <div class="menu">
      <ul class="list">
        <li @if (request()->routeIs('dashboard')) class="active" @endif>
          <a href="{{ route('dashboard') }}">
            <i class="fas fa-home"></i>
            <span>{{ __('root.menu.dashboard') }}</span>
          </a>
        </li>
        @includeIf('shared.aside.aside-branch')
        @includeIf('shared.aside.aside-ledger')
        @includeIf('shared.aside.aside-banks')
        @includeIf('shared.aside.aside-demo-mode')
        @includeIf('shared.aside.aside-voucher')
        @includeIf('shared.aside.aside-reports')
        @includeIf('shared.aside.aside-language')
        {{-- --}}
        @includeIf('shared.aside.aside-customers')
        @includeIf('shared.aside.aside-inventory')
        @includeIf('shared.aside.aside-vendors')
        @includeIf('shared.aside.aside-budget')
        @includeIf('shared.aside.aside-payroll')
        @includeIf('shared.aside.aside-general-journal')
        {{-- --}}
        @includeIf('shared.aside.aside-users')
        @includeIf('shared.aside.aside-roles')
        @includeIf('shared.aside.aside-settings')
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