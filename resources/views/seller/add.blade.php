@extends('layouts.app')
@section('title', 'Tambah Ikan')
@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    <i class="fas fa-user"></i> {{ $user->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route ('history') }}">
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
<div class="container d-flex justify-content-center align-items-center my-3">
<form class="bg-grey border border-dark rounded p-5" action="{{ route('upload') }} " method="post">
    @csrf
    <!-- @method('POST') -->
    <div class="text-center pb-3">
        <h4>Upload Ikan</h4>
    </div>
    
  <div class="form-group">
    <label for="name">Nama Ikan</label>
    <input autocorrect="on" type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="mis. Kerapu" value="{{ old('name') }}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="harga">Harga per Kilogram</label>
    <input class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="mis. 10000" value="{{ old('harga') }}">
    @error('harga')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  
  </div>

  <div class="form-group">
    <label for="stok">Jumlah Ikan (Kg)</label>
    <input class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="mis. 5" value="{{ old('stok') }}">
    @error('stok')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
  
  <div class="form-group">
      <label for="type">Jenis</label>
      <select id="type" class="form-control" name="type">
        <option selected>Ikan Air Laut</option>
        <option selected>Ikan Air Tawar</option>
      </select>
    </div>

  <button type="submit" class="btn btn-outline-dark btn-block"><i class="fas fa-angle-double-up"> Upload</i></button>
</form>
</div>
@endsection