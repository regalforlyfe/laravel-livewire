@extends('layout.base')
@section('title')
Mahasiswa
@endsection
@section('content')
<div class="row" style="background-color:#F2F3F5;margin-left:-20px;margin-top:-20px">
    <div class="col-md-12">
        <div class="well lead text-center kategori">
            Kategori
        </div>
    </div>
</div>
<div class="row project-item" style="background-color:#F2F3F5;margin-left:-20px;margin-top:-20px">
    <div class="col-md-6 text-center" style="padding-top: 20px;">
        <img src="{{asset('asset/Group 63.png')}}" class="item-image">
        <br>
        <h4 class="item-title">Aplikasi WEB</h4>

    </div>
    <div class="col-md-6 text-center" style="padding-top: 20px;">
        <img src="{{asset('asset/Group 64.png')}}" class="item-image">
        <br>
        <h4 class="item-title">Aplikasi Mobile</h4>

    </div>
</div>
<div class="row project-item" style="background-color:#F2F3F5;margin-left:-20px;margin-top:-20px">
    <div class="col-md-6 text-center" style="padding-top: 20px;">
        <img src="{{asset('asset/Group 65.png')}}" class="item-image">
        <br>
        <h4 class="item-title">Tugas Akhir</h4>

    </div>
    <div class="col-md-6 text-center" style="padding-top: 20px;">
        <img src="{{asset('asset/Group 66.png')}}" class="item-image">
        <br>
        <h4 class="item-title">Multimedia</h4>

    </div>
</div>
@endsection