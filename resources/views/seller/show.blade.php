@extends ('layouts.app')
@section ('title','ListKan')

@section ('content')
<div class="container h-75 p-4 text-center">
@if (Session::has('edited'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('edited') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('deleted'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('deleted') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <table class="table">
       <thead>
            <tr>
                <th>Nama Ikan</th>
                <th>Harga/kg</th>
                <th>Stok (kg)</th>
                <th>Jenis Ikan</th>
                <th>Aksi</th>
            </tr>
       </thead>
       @if($user->ikan->count() != 0)
       @foreach($user->ikan as $i)
       <tr>
        <td>{{ $i->name }}</td>
        <td>{{ $i->pivot->harga_ikan }}</td>
        <td>{{ $i->pivot->stok }}</td>
        <td>{{ $i->type }}</td>
        <td class="d-flex justify-content-center">   
            <a href="/seller/edit/{{ $i->id }}" class="btn btn-success mr-2">Ubah</a>
            
        <form action="/seller/hapus/{{ $i->id }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-danger" value="Hapus">
        </form>
         </td>
       </tr>
       @endforeach

        @else
        
            <h2>Tidak ada data ikan.</h2>
        
        @endif
    </table> 
</div>

@endsection