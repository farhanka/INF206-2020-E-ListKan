@extends ('layouts.app')
@section('title', 'History')

@section('content')
Pemesanan berhasil! <br>
{{ $data['bobot'] }} kg ikan {{  $data['namaikan'] }} <br>
 pasar {{ $market->name }} <br>
Alamat: {{ $market->address }} <br>
penjual: {{ $pedagang->firstname }} hp: {{ $pedagang->phonenumber }} <br>
order id: {{ $data['code'] }}

@endsection 