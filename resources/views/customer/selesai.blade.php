@extends ('layouts.app')
@section('title', 'Order')

@section('content')
Pemesanan berhasil ! <br>
{{ $data['bobot'] }} kg ikan {{  $data['namaikan'] }} <br>
Harga:  Rp {{ $data['harga']*$data['bobot'] }}  <br>
Pasar {{ $market->name }} <br>
Alamat: {{ $market->address }} <br>
penjual: {{ $pedagang->firstname }} hp: {{ $pedagang->phonenumber }} <br>
order id: {{ $data['code'] }}
pembeli = {{ $data['pembeli'] }}

@endsection 