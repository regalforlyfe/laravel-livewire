@extends('layouts.app')

@section('content')
<div>
    <div class="text-center">
        <h1 class="pt-5">Daftar Sebagai Apa</h1>
    </div>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body" style="background-color: #8BCDCD;">
                        <div class="text-center pt-3 pb-3">
                            <img src="{{ asset('asset/square.jpg') }}" height="400" alt="logo" loading="lazy">
                            <h1 class="pt-2 pb-2">Dosen</h1>
                            <a class="btn btn-primary" href="/registerdosen">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2">
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-body" style="background-color: #8BCDCD;">
                        <div class="text-center pt-3 pb-3">
                            <img src="{{ asset('asset/square.jpg') }}" height="400" alt="logo" loading="lazy">
                            <h1 class="pt-2 pb-2">Mahasiswa</h1>
                            <a class="btn btn-primary" href="/registermahasiswa">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
