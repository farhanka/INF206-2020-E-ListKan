@extends ('layouts.app')
@section('title',  'Pasar' )
<link rel="stylesheet" href="{{ asset('css\card.css') }}">

@section('content')
<div class="container text-center mh-75">
        <h3 class="py-4"> Pasar {{ $market->name }} </h3>
    <div class="row ">
        @foreach($pedagang as $p)
            @foreach($p->ikan as $i)
            <li class="cards_item  d-flex justify-content-center">
      <div class="card ">
        <div class="card_image"><img src="{{ asset('img/ikan_default.png') }}"></div>
        <div class="card_content">
          <h2 class="card_title">{{ $i->name }}</h2>
          <p class="card_text">Rp. {{ $i->pivot->harga_ikan }}/ kg</p>
          <p class="card_text">Tersedia: {{ $i->pivot->stok }} kg</p>
          <a href="/customer/beli/{{ $i->pivot->user_id }}/{{ $i->pivot->ikan_id }}" class="bttn card_btn">Beli</a>
        </div>
      </div>
    </li>
            @endforeach
        @endforeach
    </div>
</div>
@endsection