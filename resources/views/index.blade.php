@extends('layouts.app')
@section('title','ListKan')

@section('navtext')

<a class="btn btn-info mr-2" href="{{ route('register') }}">Daftar</a>
<a class="btn btn-primary" href="{{ route('login') }}">Masuk</a>
@endsection

@section('content')
    <div class="jumbotron p-0">
        <div class="container container-sm">
            <h1 class="position-absolute py-5 text-lg">Andalan Untuk <br>Jual Beli Ikan. <br>
            <p class="text-sm py-3">Dengan ListKan, semua jadi lebih mudah</p></h1>
        </div>
        <img class="img-fluid "src="{{ asset('img/jumbotron.png') }}" alt="gambar" >
    </div>

    
    <div class="container justify-content-center d-flex py-5">
        <div class="col-7">
            <h3 class="text-md">Selamat tinggal segala masalah</h3><br>
                <p class="text-sm">Solusi terbaik untuk masalah jual beli ikan. <br>
                Mulai dari list pasar, harga ikan hingga upload ikan untuk pedagang.</p>
        </div>
    </div>
@endsection



