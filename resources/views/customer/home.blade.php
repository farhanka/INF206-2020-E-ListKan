@extends ('layouts.app')
@section('title', 'ListKan')
 

@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    <i class="fas fa-user"></i> {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="/customer/history">
    <i class="fas fa-history"></i> {{ __('History') }}
        </a>
        <a class="dropdown-item" href="{{ route('profile') }}"
            >
    <i class="fas fa-user-edit"></i> {{ __('Edit Profile') }}
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
        </a>
        

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection

@section('content')
<header class="masthead text-white text-center">
    <div class="overlay">
@if (Session::has('null'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('null') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">ListKan</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="row justify-content-center">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <h3>Selamat Datang!</h3>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <h3>{{ $user->firstname }}</h3>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <h3>{{ date('d-m-Y ~ h:i') }}</h3>
              </div>
            </div>
        </div>
      </div>
    </div>
  </header>


<div class="container my-5 text-center justify-content-center align-items-center mh-50">
@if($market->count() != 0)
    <h4>Pilih Pasar</h4>
        <div class="row">
        @foreach($market as $m)
            <div class="col col-md col-6">
                <a href="customer/pasar/{{ $m->id }}">
                    <img alt="..." src="{{ asset('img\pasar.png') }}" id="ikonpasar">
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