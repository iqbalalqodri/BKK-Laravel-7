@extends('main')
@section('title','Profil-Visi-Misi-Moto')


@section('content')
    <div class="container">
            <br>
          <p style="text-align: center;"><strong>{{$Profil->judul}}</strong></p>
            {!!$Profil->konten!!}
    </div>
    
@endsection