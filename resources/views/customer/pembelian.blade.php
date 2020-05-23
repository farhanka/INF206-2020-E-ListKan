@extends ('layouts.app')
@section('title', 'Pembelian')


@section('content')
<div class="container d-flex justify-content-center align-items-center h-75">
    <div class="col col-md-3 text-center">
        <div class="card align-items-center">
            <img class="card-img-top w-75" src="{{ asset('img/ikan_default.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $a->name }}</h4>
                    <p class="card-text">Rp. {{ $ikan->harga_ikan }}/ kg </p>
                    <p class="card-text">Stok : {{ $ikan->stok }} kg </p>
                    <p class="card-text">Penjual : {{ $pedagang->firstname }} {{ $pedagang->lastname }} </p>
                    <p class="card-text">HP : {{ $pedagang->phonenumber }} </p>
                    
                </div>
        </div>
        <br>
    </div>
    <div class=" col col-md-3">
    <button class="btn btn-primary">BUY</button>
    </div>
</div>
@endsection