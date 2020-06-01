@extends ('layouts.app')
@section('title', 'Order')
@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/customer/history">
            {{ __('History') }}
        </a>
        <a class="dropdown-item" href="{{ route('profile') }}" >
            {{ __('Edit Profile') }}
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection
@section('content')

<div class="container d-flex justify-content-between mt-3">
    <div class="column">
        <h4>Order Berhasil</h4>
    </div>
    <div class="column">
        <a href ="/" class="btn btn-outline-success">Kembali ke Halaman Awal</a>
    </div>
</div>

<div class="container my-4">
  <div class="card">
    <div class="card-header">
      Invoice
      <i>{{ date('d-m-Y') }}</i>
      <span class="float-right"> <i>Order ID:</i> {{ $data['code'] }} </span>

    </div>
    <div class="card-body">
      <div class="row mb-4">
        <div class="col-sm-6">
          <h6 class="mb-3">Pembeli:</h6>
          <div>
            <i>{{ $user->firstname }} {{ $user->lastname }}</i>
          </div>
          <div>HP: {{ $user->phonenumber }}</div>
          <div>Email: {{ $user->email }}</div> <br>
        </div>

        <div class="col-sm-6">
          <h6 class="mb-3">Penjual:</h6>
          <div>
            <i>{{ $pedagang->firstname }} {{ $pedagang->lastname }}</i>
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
              <td class="left i">{{  $data['namaikan'] }}</td>
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
                  <i>Total yang harus dibayar</i>
                </td>
                <td class="right">
                  <i>Rp {{ $data['harga']*$data['bobot'] }}</i>
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