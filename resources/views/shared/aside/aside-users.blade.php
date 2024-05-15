<li @if (config('role_manage.User.All')==0 and config('role_manage.User.TrashShow')==0 and
  config('role_manage.User.Create')==0) class="dis-none" @endif @if (Request::url()===route('user') or
  Request::url()===route('user.create') or Request::url()===route('user.trashed') or
  Request::url()===route('user.active.search') or Request::url()===route('user.trashed.search')) class="active " @endif>
  <a class="menu-toggle " href="javascript:void(0);">
    <i class="fas fa-user"></i>
    <span>User</span>
  </a>
  <ul class="ml-menu">
    <li @if (Request::url()===route('user') or Request::url()===route('user.active.search')) class="active" @endif>
      <a @if (config('role_manage.User.All')==0) class="dis-none" @endif href="{{ route('user') }}">{{
        __('root.menu.user_all') }}</a>
    </li>
    <li @if (Request::url()===route('user.create')) class="active" @endif>
      <a @if (config('role_manage.User.Create')==0) class="dis-none" @endif href="{{ route('user.create') }}">{{
        __('root.menu.user_create') }}</a>
    </li>
    <li @if (Request::url()===route('user.trashed') or Request::url()===route('user.trashed.search')) class="active"
      @endif>
      <a @if (config('role_manage.User.TrashShow')==0) class="dis-none" @endif href="{{ route('user.trashed') }}">{{
        __('root.menu.user_trashed') }}</a>
    </li>
  </ul>
</li>