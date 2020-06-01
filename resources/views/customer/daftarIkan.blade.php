@extends ('layouts.app')
@section('title',  'Pasar' )
<link rel="stylesheet" href="{{ asset('css\card.css') }}">
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
<div class="container text-center mh-75">
        <h3 class="py-4"> {{ $market->name }} </h3>
    <div class="row  justify-content-center">
        @foreach($pedagang as $p)
            @foreach($p->ikan as $i)
            <li class="cards_item   justify-content-center">
      <div class="card">
        <div class="card_image"><img class="img" src="@if($i->pivot->picture == null) {{ asset('img\ikan_default.png') }}
                          @else {{ asset('img/') }}/{{ $i->pivot->picture }} @endif"></div>
        <div class="card_content">
          <h2 class="card_title">{{ $i->name }}</h2>
          <p class="card_text">Rp. {{ $i->pivot->harga_ikan }}/ kg</p>
          <p class="card_text">Tersedia: {{ $i->pivot->stok }} kg</p>
          <a href="/customer/beli/{{ $i->pivot->user_id }}/{{ $i->pivot->ikan_id }}" class="btn btn-outline-light">Beli</a>
        </div>
      </div>
    </li>
            @endforeach
        @endforeach
    </div>
</div>
@endsection