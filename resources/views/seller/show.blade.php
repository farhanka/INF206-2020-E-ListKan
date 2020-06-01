@extends ('layouts.app')
@section ('title','ListKan')
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
            <a href="/seller/edit/{{ $i->id }}" class="btn btn-success mr-2"><i class="far fa-edit"></i></a>
            
        <form action="/seller/hapus/{{ $i->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger" > <i class="far fa-trash-alt"></i> </button>
        </form>
         </td>
       </tr>
       @endforeach

        @else
        <tr><td colspan="5"><h5>Tidak ada data ikan</h5></td></tr>
        @endif
    </table> 
</div>

@endsection