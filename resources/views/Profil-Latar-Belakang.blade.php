@extends('main')
@section('title','Profil Latar Belakang')


@section('content')
    <div class="container">
            <br>
          <p style="text-align: center;"><strong>{{$Profil->judul}}</strong></p>
            {!!$Profil->konten!!}
    </div>
    
@endsection