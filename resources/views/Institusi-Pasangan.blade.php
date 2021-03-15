@extends('main')
@section('title','Kegiatan')



@section('content')
<section class="content">
    <div class="container">
        <br>
        <p style="text-align: center;"><strong>{{$institusi->judul}}</strong></p>
        {!! $institusi->konten !!}
    </div>
  </section>
    
@endsection