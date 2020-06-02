@extends ('layouts.app')
@section('title',  'Pasar' )
<link rel="stylesheet" href="{{ asset('css\card.css') }}">
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
<div class="container text-center mh-75">
        <h3 class="py-4"> {{ $market->name }} </h3>
    <div class="row  justify-content-center">
            @foreach($ikan as $i)
            <li class="cards_item justify-content-center">
      <div class="card border-dark">
        <div class="card_image"><img class="img" src="@if($i->picture == null) {{ asset('img/ikan_default.png') }}
                          @else {{ asset('img/data') }}/{{ $i->picture }} @endif"></div>
        <div class="card_content">
          <p class="card_text">Rp. {{ $i->harga_ikan }}/ kg</p>
          <p class="card_text">Tersedia: {{ $i->stok }} kg</p>
          <a href="/customer/beli/{{ $i->user_id }}/{{ $i->ikan_id }}" class=" btn btn-block @if ($i->stok == 0) disabled btn-outline-light @else btn-success @endif">Beli</a>
        </div>
      </div>
    </li>
            @endforeach
    </div>
</div>
@endsection