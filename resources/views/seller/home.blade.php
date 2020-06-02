@extends ('layouts.app')
@section('title', 'ListKan - Pedagang')

@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    <i class="fas fa-user"></i> {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route ('history') }}">
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
    @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
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

    <div class="container mh-50 text-center justify-content-center align-items-center d-flex ">
        @if($user->market_id != null && is_numeric($user->market_id))
            <section class="features-icons bg-light text-center">
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-4 border border-primary m-1">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="fas fa-fish m-auto text-primary"></i>
                        </div>
                        <h3><a class="btn btn-outline-primary" href="{{ route('add') }}">Tambah Ikan</a></h3>
                            <p class="lead mb-0">Unggah ikan-ikan yang Anda jual,
                                agar dapat dilihat oleh pembeli melalui aplikasi ListKan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 border border-primary m-1">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="fas fa-list-alt m-auto text-primary"></i>
                        </div>
                        <h3><a class="btn btn-outline-primary" href="{{ route('show') }}">Lihat Lapak</a></h3>
                            <p class="lead mb-0">Lihat ikan-ikan apa saja yang sudah Anda unggah.
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        
        @else
        <div class="row py-3">
            <div class="col ">
            <i class="fas fa-store fa-2x "> <br> Satu langkah lagi <br> Beritahu dimana Anda berjualan.
                <br><br> <a href="{{ route('profile') }}" class=" btn btn-outline-dark">Lengkapi Profil</a>
            </i> 
            </div>
        </div>
        @endif
    </div>
   


@endsection