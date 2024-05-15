<li @if (Request::url()===route('role-manage') or Request::url()===route('role-manage.create') or
  Request::url()===route('role-manage.trashed') or Request::url()===route('role-manage.active.search') or
  Request::url()===route('role-manage.trashed.search')) class="active" @endif @if
  (config('role_manage.RoleManager.All')==0 and config('role_manage.RoleManager.TrashShow')==0 and
  config('role_manage.RoleManager.Create')==0) class="dis-none" @endif>
  <a class="menu-toggle " href="javascript:void(0);">
    <i class="fas fa-user-lock "></i>
    <span>{{ __('root.menu.role_manage') }}</span>
  </a>

  <ul class="ml-menu">
    <li @if (Request::url()===route('role-manage') or Request::url()===route('role-manage.active.search'))
      class="active" @endif>
      <a @if (config('role_manage.RoleManager.All')==0) class="dis-none" @endif href="{{ route('role-manage') }}">{{
        __('root.menu.role_manage_all') }}</a>
    </li>
    <li @if (Request::url()===route('role-manage.create')) class="active" @endif>
      <a @if (config('role_manage.RoleManager.Create')==0) class="dis-none" @endif
        href="{{ route('role-manage.create') }}">{{ __('root.menu.role_manage_create') }}</a>
    </li>
    <li @if (Request::url()===route('role-manage.trashed') or Request::url()===route('role-manage.trashed.search'))
      class="active" @endif>
      <a @if (config('role_manage.RoleManager.TrashShow')==0) class="dis-none" @endif
        href="{{ route('role-manage.trashed') }}">{{ __('root.menu.role_manage_trashed') }}</a>
    </li>
  </ul>
</li>