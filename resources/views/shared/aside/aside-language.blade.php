<li @if (config('role_manage.Language.All')==0 and config('role_manage.Language.TrashShow')==0 and
  config('role_manage.Language.Create')==0) class="dis-none" @endif @if (Request::url()===route('language') or
  Request::url()===route('language.create') or Request::url()===route('language.trashed') or
  Request::url()===route('language.active.search') or Request::url()===route('language.trashed.search')) class="active "
  @endif>
  <a class="menu-toggle " href="javascript:void(0);">
    <i class="fas fa-language"></i>
    <span>{{ __('root.menu.language') }}</span>
  </a>
  <ul class="ml-menu">
    <li @if (Request::url()===route('language') or Request::url()===route('language.active.search')) class="active"
      @endif>
      <a @if (config('role_manage.Language.All')==0) class="dis-none" @endif href="{{ route('language') }}">{{
        __('root.menu.language_all') }}</a>
    </li>
    <li @if (Request::url()===route('language.create')) class="active" @endif>
      <a @if (config('role_manage.Language.Create')==0) class="dis-none" @endif href="{{ route('language.create') }}">{{
        __('root.menu.language_create') }}</a>
    </li>
    <li @if (Request::url()===route('language.trashed') or Request::url()===route('language.trashed.search'))
      class="active" @endif>
      <a @if (config('role_manage.Language.TrashShow')==0) class="dis-none" @endif
        href="{{ route('language.trashed') }}">{{ __('root.menu.language_trashed') }}</a>
    </li>
  </ul>
</li>