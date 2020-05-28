@extends('layouts.app')

@section('navtext')
<div class=" dropdown">
    <a id="navbarDropdown" class="btn btn-outline-info dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->username }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/seller/history">
            {{ __('History') }}
        </a>
        
        <a class="dropdown-item" href="{{ route('profile') }}"
            >
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
<div class="container h-75">
    <div class="text-center justify-content-center d-flex pt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Logged in!
            </div>
        </div>
    </div>
</div>
@endsection
