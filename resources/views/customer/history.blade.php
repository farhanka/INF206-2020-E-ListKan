@extends ('layouts.app')
@section ('title','Riwayat Transaksi')
@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-light dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    <i class="fas fa-user"></i> {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">
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

    @if($customer->count() != 0)
    <div class="container mh-75 my-4 ">
    @foreach($customer as $s)
        <div class="card  mb-3">
            <div class="px-5 row card-header justify-content-between ">
                <h5>Order ID : {{ $s->order_id }}</h5>
                <h5>{{ $s->created_at }}</h5>
            </div>

            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col col-sm col-10 card-title">
                        Nama barang : {{ $s->ikan }} <br>
                        Jumlah : {{ $s->bobot }} kg <br>
                        Total Harga : Rp {{ $s->harga }}</p>
                        <p class="card-title">Nama Penjual : {{ $s->penjual }} <br>
                        Pasar: {{ $s->pasar }}
                        </p>
                    </div>
                    <div class="mx-3 col col-9 col-sm card-title bg-grey border rounded border-dark">
                        <p class="card-text" id="collapseExample"><i class="fas fa-sticky-note">  Catatan Pemesanan :</i> <strong class="font-italic"> {{ $s->catatan }} </strong></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    @else
    <div class="container mh-75 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <i class="fas fa-history"> Belum ada riwayat transaksi.</i> 
        </div>
    </div>
    @endif

@endsection