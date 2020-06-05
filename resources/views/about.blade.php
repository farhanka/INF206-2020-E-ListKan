@extends('layouts.app')
@section('title', 'Tentang')

@section('content')
<div class="container align-items-center mh-75 my-5">
            <div class="row justify-content-center">
            <button class="btn btn-outline-dark m-3" type="button" onclick="myFunction()" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                <i class="fas fa-code hero"> RPL | Kelompok E - DY </i>
            </button>
            </div>
        
            <div class="collapse" id="collapseExample">
                <div class="card border-dark card-body">
                    <div class="row text-center">
                        <div class="col col-12">
                            <i class="fas fa-user"> Nahda Rizky </i><br>
                            <i class="fas fa-user"> Safratul Rina </i><br>
                            <i class="fas fa-user"> Farhan Karomi </i><br>
                        </div>
                        <div class="col col-12">
                            <i class="fas fa-user"> Farhan Maulana </i><br>
                            <i class="fas fa-user"> Misbahul Rahma </i><br>
                            <i class="fas fa-user"> Sayed Halik Musnazi</i><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="container mt-2" id="listkan">
                    <div class="card border-dark card-body">
                        ListKan adalah aplikasi yang digunakan untuk mempermudah proses jual-beli ikan di pasar.
                        Pedagang dapat mengunggah ikan yang mereka jual ke ListKan agar pembeli dapat mengetahui
                        ketersediaan dan harga ikan di pasar.
                    </div>
                </div>
            </div>
</div>
@endsection