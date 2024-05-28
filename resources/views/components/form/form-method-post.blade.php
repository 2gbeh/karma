<form class="form" id="form_validation" method="POST" action="{{ route($action) }}">
  @csrf
  {{ $slot }}
</form>