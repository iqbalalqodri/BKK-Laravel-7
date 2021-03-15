@extends('main')
@section('title','Profil Dasar Pemikiran')


@section('content')
    <div class="container">
            <br>
          <p style="text-align: center;"><strong>{{$Profil->judul}}</strong></p>
            {!!$Profil->konten!!}
    </div>
    
@endsection