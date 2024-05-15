@props(['all' => 0, 'trash' => 0])

<div class="header">
  {{-- LEFT SIDE --}}
  <a href="{{ url()->current() }}" class="btn btn-xs btn-info waves-effect">
    All ({{ $all }})
  </a>
  {{-- --}}
  <a href="{{ url()->current() . '?trash=true' }}" @class([ 'btn btn-xs btn-danger waves-effect text-black'
    , 'dis-none'=> $trash < 1 ])>
      Trash ({{ $trash }})
  </a>

  {{-- RIGHT SIDE --}}
  <ul class="header-dropdown m-r--5">
    <form class="search" action="" method="get">
      @csrf
      <input type="search" name="search" class="form-control input-sm" placeholder="Search ( / )" required />
    </form>
  </ul>
</div>