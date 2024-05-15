<li @if (config('role_manage.Branch.All')==0 and config('role_manage.Branch.TrashShow')==0 and
  config('role_manage.Branch.Create')==0) class="dis-none" @endif @if (Request::url()===route('branch') or
  Request::url()===route('branch.create') or Request::url()===route('branch.trashed') or
  Request::url()===route('branch.active.search') or Request::url()===route('branch.trashed.search')) class="active "
  @endif>
  <a class="menu-toggle " href="javascript:void(0);">
    <i class="fas fa-project-diagram"></i>
    <span>{{ __('root.menu.branch') }} </span>
  </a>
  <ul class="ml-menu">
    <li @if (Request::url()===route('branch') or Request::url()===route('branch.active.search')) class="active" @endif>
      <a @if (config('role_manage.Branch.All')==0) class="dis-none" @endif href="{{ route('branch') }}">{{
        __('root.menu.branch_all') }}</a>
    </li>
    <li @if (Request::url()===route('branch.create')) class="active" @endif>
      <a @if (config('role_manage.Branch.Create')==0) class="dis-none" @endif href="{{ route('branch.create') }}">{{
        __('root.menu.branch_create') }}</a>
    </li>
    <li @if (Request::url()===route('branch.trashed') or Request::url()===route('branch.trashed.search')) class="active"
      @endif>
      <a @if (config('role_manage.Branch.TrashShow')==0) class="dis-none" @endif href="{{ route('branch.trashed') }}">{{
        __('root.menu.branch_trashed') }}</a>
    </li>
  </ul>
</li>