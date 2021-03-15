@extends('main')
@section('title','Sekema Perekrutan')



@section('content')
<section class="content">
    <div class="container">
        <br>
        <center><p><a href="" rel="attachment wp-att-12009"><img class="wp-image-12009 aligncenter" 
          src="{{ URL::to('assets') }}/images/post/{{ $Sekema->gambar }}" 
          alt="" width="750" height="720" 
          sizes="(max-width: 750px) 100vw, 750px" /></a></p></center>
    </div>
  </section>
    
@endsection