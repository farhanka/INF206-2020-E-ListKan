@extends ('layouts.app')
@section('title', "Pembelian")

@section('content')
<div class="container">
    <div class="row  justify-content-center  align-items-center">
    <div class="col col-md-5 text-center">
        <div class="card align-items-center my-3">
            <img class="card_image img" src="{{ asset('img/ikan_default.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $a->name }}</h4>
                    <p class="card-text">Rp. {{ $ikan->harga_ikan }}/ kg </p>
                    <p class="card-text">Stok : {{ $ikan->stok }} kg </p>
                    <p class="card-text">Di Upload Pada : {{ $ikan->created_at }} </p>
                    <p class="card-text">Penjual : {{ $pedagang->firstname }} {{ $pedagang->lastname }} </p>
                    <p class="card-text">HP : {{ $pedagang->phonenumber }} </p>
                    
                </div>
        </div>
    </div>
    <div class=" col col-md-6">
        <form action="{{ route('order') }}" method="post"> 
        @csrf
        @method('post')
            <div class="form-group row">
                <label for="jumlah" class="col-md-4 col-form-label text-md-right">Jumlah (Kg)</label>

                <div class="col-md-4">
                    <input  id="jumlah" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" autofocus>
                    @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            <button type="submit" class="btn btn-primary mt-1 ml-2">BELI</button>
            </div>
            <div class="form-group row">
                <label for="catatan" class="col-md-4 col-form-label text-md-right">Catatan</label>
                <div class="col-md-4">
                    <textarea placeholder ='Katakan sesuatu pada penjual...' name="catatan" id="catatan" cols="30" rows="10"></textarea>
                </div>
            </div>
            <input type="hidden" value="{{ $ikan->harga_ikan }}" name="harga">
            <input type="hidden" value="{{ $ikan->id }}" name="id">
            <input type="hidden" value="{{ $ikan->stok }}" name="stok">
            <input type="hidden" value="{{ $a->name }}" name="namaikan">
            <input type="hidden" value="{{ auth()->user()->firstname }}" name="pembeli">
            <input type="hidden" value="{{ $pedagang->market_id }}" name="pasar">
            <input type="hidden" value="{{ $pedagang->id }}" name="penjual">
            
        </form>
    </div>
    </div>
</div>

@endsection