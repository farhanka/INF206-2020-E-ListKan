@extends ('layouts.app')
@section('title', 'Home - Pengunjung')

@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <a class="dropdown-item" href="{{ route('profile') }}"
            >
            {{ __('Edit Profile') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection

@section('content')
<div class="container">
@if (Session::has('null'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('null') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
</div>

<div class="container text-center d-flex justify-content-center align-items-center h-75">
@foreach($market as $m)
    <a href="/customer/{{ $m->id }}"> {{ $m->name }} </a><br>
@endforeach



</div>
@endsection