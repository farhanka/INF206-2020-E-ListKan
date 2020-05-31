@extends ('layouts.app')
@section('title', 'Home - Pedagang')

@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="/seller/history">
            {{ __('History') }}
        </a>
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

    <div class="jumbotron p-0 h-25 text-center d-flex align-items-center">
        <div class="container container-sm">
            <h1 >ListKan</h1>
            Selamat Datang {{ $user->firstname }} <br>
            {{ date('d-m-Y h:i:s') }}
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    </div>
    <div class="container mh-50 text-center justify-content-center align-items-center d-flex ">
        @if($user->market_id != null)
        
        <a  href="{{ route('add') }}" class="btn-lg btn-success mr-4 "><i class="fas fa-fish fa-2x"> Tambah Ikan</i></a>
        <a href="{{  route('show') }}" class="btn-lg btn-primary"><i class="fas fa-list-alt fa-2x"> Lihat Lapak</i></a>
        @else
        <div class="row py-3">
            <div class="col">
            <i class="fas fa-store fa-3x"> <br> Satu langkah lagi <br> Beritahu dimana anda berjualan.
                <br> <a href="{{ route('profile') }}" class="btn btn-dark">Lengkapi Profil</a>
            </i> 
            </div>
        </div>
        @endif
    </div>
   


@endsection