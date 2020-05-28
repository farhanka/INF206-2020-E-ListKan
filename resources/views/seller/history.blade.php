@extends ('layouts.app')
@section ('title','History')

@section('content')

    <div class="container col-6 my-4">
    @foreach($seller as $s)
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
                    <p class="card-title">Nama Pembeli : {{ $s->pembeli }}</p>

                </div>
                <div class="col-6 card-title bg-warning">
                
                <p class="card-text">Catatan Pembeli : <strong class="font-italic">{{ $s->catatan }}.</strong></p>
                
                </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection