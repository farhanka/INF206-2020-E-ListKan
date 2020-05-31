@extends ('layouts.app')
@section('title', 'Order')

@section('content')

<div class="container d-flex justify-content-between mt-3">
    <div class="column">
        <h4>Order Berhasil</h4>
    </div>
    <div class="column">
        <a href ="/" class="btn btn-primary">Kembali ke Halaman Awal</a>
    </div>
</div>

<div class="container my-4">
  <div class="card">
    <div class="card-header">
      Invoice
      <strong>{{ date('d-m-Y') }}</strong>
      <span class="float-right"> <strong>Order ID:</strong> {{ $data['code'] }} </span>

    </div>
    <div class="card-body">
      <div class="row mb-4">
        <div class="col-sm-6">
          <h6 class="mb-3">Pembeli:</h6>
          <div>
            <strong>{{ $user->firstname }} {{ $user->lastname }}</strong>
          </div>
          <div>HP: {{ $user->phonenumber }}</div>
          <div>Email: {{ $user->email }}</div> <br>
        </div>

        <div class="col-sm-6">
          <h6 class="mb-3">Penjual:</h6>
          <div>
            <strong>{{ $pedagang->firstname }} {{ $pedagang->lastname }}</strong>
          </div>
          <div>HP: {{ $pedagang->phonenumber }}</div>
          <div>Email: {{ $pedagang->email }}</div>
          <div>Pasar: {{ $market->name }}, {{ $market->address }} </div>
        </div>

      </div>

      <div class="table-responsive-sm">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="center">#</th>
              <th>Nama Ikan</th>
              <th>Catatan</th>

              <th class="right">Harga / Kg</th>
              <th class="center">Jumlah (Kg)</th>
              <th class="right">Total Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="center">1</td>
              <td class="left strong">{{  $data['namaikan'] }}</td>
              <td class="left">{{  $data['catatan'] }}</td>

              <td class="right">{{  $data['harga'] }}</td>
              <td class="center">{{  $data['bobot'] }}</td>
              <td class="right">Rp {{ $data['harga']*$data['bobot'] }}</td>
            </tr>
            <tr>
              <td class="center">2</td>
              <td class="left">-</td>
              <td class="left">-</td>

              <td class="right">-</td>
              <td class="center">-</td>
              <td class="right">-</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-5 ml-auto">
          <table class="table table-clear">
            <tbody>
                <td class="left">
                  <strong>Total yang harus dibayar</strong>
                </td>
                <td class="right">
                  <strong>Rp {{ $data['harga']*$data['bobot'] }}</strong>
                </td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <small>NOTE: Silakan pergi ke pasar yang tertulis di atas untuk mengambil dan membayar ikan</small>
</div>
@endsection