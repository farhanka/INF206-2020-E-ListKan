@extends ('layouts.app')
@section ('title','History')

@section('content')

    @if($customer->count() != 0)
    <div class="container col-6 my-4 ">
    @foreach($customer as $s)
        <div class="card  mb-3">
            <div class="card-header d-flex justify-content-between">
                <h5>Order ID : {{ $s->order_id }}</h5>
                <h5>{{ $s->created_at }}</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col col-6 card-title">
                        Nama barang : {{ $s->ikan }} <br>
                        Jumlah : {{ $s->bobot }} kg <br>
                        Total Harga : Rp {{ $s->harga }}</p>
                        <p class="card-title">Nama Penjual : {{ $s->penjual }} <br>
                        Pasar: {{ $s->pasar }}
                        </p>
                    </div>
                    <div class="col-6 card-title bg-warning">
                        <p class="card-text" id="collapseExample">Catatan Pemesanan : <strong class="font-italic">{{ $s->catatan }}.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    @else
    <div class="container mh-75 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
        <i class="fas fa-history"> Belum ada riwayat pembelian.</i> 
        </div>
        
    </div>
    @endif

@endsection