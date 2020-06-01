@extends('layouts.app')
@section('title', 'ListKan - Edit')

@section('content')
<div class="container d-flex justify-content-center align-items-center">

<form class="bg-light p-5" action="{{ route('store') }} " method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="text-center pb-3">
        <h4>Edit Ikan</h4>
    </div>
    <input type="hidden" value="{{ $ikan->id }}" name="id">
  <div class="form-group">
    <label for="name">Nama Ikan</label>
    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $ikan->name }}" disabled>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="harga">Harga per kilogram</label>
    <input class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $x->harga_ikan }}">
    @error('harga')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  
  </div>
  <div class="form-group">
    <label for="stok">Stok (kilogram)</label>
    <input class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ $x->stok }}">
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
  
  <div class="form-group">
    <label for="picture">Gambar Ikan</label>
    <input type="file" name="picture" class="form-control @error('picture') is-invalid @enderror" id="picture">
    @error('picture')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary float-right">Perbarui</button>
</form>

</div>
@endsection