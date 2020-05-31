@extends ('layouts.app')
@section('title', 'Home - Pengunjung')

@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/customer/history">
            {{ __('History') }}
        </a>
        <a class="dropdown-item" href="{{ route('profile') }}" >
            {{ __('Edit Profile') }}
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection

@section('content')
<div class="jumbotron p-0 h-25 text-center d-flex align-items-center">
    <div class="container container-sm">
        <h1 >ListKan</h1>
        Selamat Datang {{ $user->firstname }} <br>
        {{ date('d-m-Y h:i:s') }}
    </div>
</div>
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
<div class="container text-center justify-content-center align-items-center mh-50">
@if($market->count() != 0)
    <h4>Pilih Pasar</h4>
        <div class="row">
        @foreach($market as $m)
            <div class="col col-md col-6">
                <a href="customer/pasar/{{ $m->id }}">
                    <img alt="..." src="{{ asset('img\pasar2.png') }}" id="ikonpasar">
                    <h5 class="p-0">{{ $m->name }}</h5>
                </a>
            </div>
        @endforeach
        </div>
@else
    <h3> Belum ada data apapun disini <br> Silakan kembali di lain waktu. </h3>
@endif
</div>

@endsection