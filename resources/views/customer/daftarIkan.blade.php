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
<div class="container text-center d-flex justify-content-center align-items-center p-3">
    <div class="row">
        @foreach($pedagang as $p)
            @foreach($p->ikan as $i)
            <div class="col col-5 col-md" >
                <div class="card align-items-center">
                    <img class="card-img-top " src="{{ asset('img/ikan_default.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $i->name }}</h5>
                            <p class="card-text">Rp. {{ $i->pivot->harga_ikan }}/ kg </p>
                            <!-- <p class="card-text">Penjual : {{ $p->firstname }} {{ $p->lastname }} </p> -->
                            <a href="/customer/beli/{{ $i->pivot->user_id }}/{{ $i->pivot->ikan_id }}" class="btn btn-primary">{{ $i->pivot->ikan_id }}</a>
                        </div>
                </div>
                <br>
            </div>
            @endforeach
        @endforeach
    </div>
</div>
@endsection