<li @if (Request::url()===route('settings.system') or Request::url()===route('settings.general')) class="active" @endif
  @if (config('role_manage.Settings.All')==0 and config('role_manage.Settings.Show')==0) class="dis-none" @endif>
  <a class="menu-toggle " href="javascript:void(0);">
    {{-- <i class="material-icons">settings</i> --}}
    <i class="fas fa-cog"></i>
    <span>{{ __('root.menu.settings') }}</span>
  </a>
  <ul class="ml-menu">
    <li @if (config('role_manage.Settings.All')==0) class="dis-none" @endif @if
      (Request::url()===route('settings.general')) class="active" @endif>
      <a href="{{ route('settings.general') }}"> {{ __('root.menu.settings_general') }} </a>
    </li>
    <li @if (config('role_manage.Settings.Show')==0) class="dis-none" @endif @if
      (Request::url()===route('settings.system')) class="active" @endif>
      <a href="{{ route('settings.system') }}">{{ __('root.menu.settings_system') }}</a>
    </li>
    <li>
      <a href="javascript:void(0);"></a>
    </li>
  </ul>
</li>