@extends('main')
@section('title','Kegiatan')



@section('content')
<section class="content">
    <div class="container">
        <br>
        <p style="text-align: center;"><strong>{{$Kegiatan->judul}}</strong></p>
        {!!$Kegiatan->konten!!}
        </div>
  </section>
    
@endsection