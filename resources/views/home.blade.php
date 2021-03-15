@extends('main')
@section('title','Home')


@section('carousel')
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url({{ asset('assets/images/slider/bg1.jpeg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Selamat Datang Di Website BKK SMK N 1 LAHAT</h1>
                                <div class="animation animated-item-2">
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.item-->

            <div class="item" style="background-image: url({{ asset('assets/images/slider/SMK.jpg') }})">
                <div class="container">

                </div>
            </div>
            <!--/.item-->

        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>
<!--/#main-slider-->
    
@endsection



@section('content')


<section id="blog">

    <div class="blog container">
        {{-- Lowongan Pekerjaan Terbaru --}}
        <div class="row">
            <hr>
                <h1>Lowongan Pekerjaan terbaru</h1>
                <hr>
            @foreach ($BKKDESC as $Data)
            <div class="col-md-4">
                <div class="blog-item">
                    <a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}"><center><img class="img-responsive img-blog" src="{{ URL::to('assets') }}/images/post/{{ $Data->gambar }}"  width="100%" alt="" /></center></a>
                    <div class="blog-content">
                        {{-- <a href="#" class="blog_cat">UI/UX DESIGN</a> --}}
                        <h2><a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}">{{$Data->judul}}</a></h2>
                        <p>{{date("d M Y", strtotime($Data->tanggal))}}</p>

                        <a class="readmore" href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}">Lihat <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!--/.blog-item-->
            </div>
            @endforeach
            <!--/.col-md-4-->
            
        </div>
        {{-- / Lowongan Pekerjaan Terbaru --}}
        <!--/.row--> 
    </div>
</section>

<section id="content">
    <div class="blog container">
               {{-- Lowongan Pekerjaan--}}
               <div class="row">
                <hr>
                <h1>Lowongan Pekerjaan</h1>
                <hr>
                @foreach ($BKK as $Data)
                <div class="col-sm-4">
                    <div class="blog-item">
                        <a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}"><img class="img-responsive img-blog" src="{{ URL::to('assets') }}/images/post/{{ $Data->gambar }}" width="100%" alt="" /></a>
                        <div class="blog-content">
                            {{-- <a href="#" class="blog_cat">UI/UX DESIGN</a> --}}
                            <h2><a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}">{{$Data->judul}}</a></h2>
                            <p>{{date("d M Y", strtotime($Data->tanggal))}}</p>
                            <h3>{!! substr($Data->konten,0,150) !!}</h3>
                            <a class="readmore" href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}">Lihat <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/.blog-item-->
                </div>
                @endforeach
                <!--/.col-md-4-->

                
            </div>
            {{-- / Lowongan Pekerjaan--}}
            <!--/.row-->


        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{ url('Lowongan-Pekerjaan') }}"><button class="btn btn-primary">Lihat Lebih Banyak Lagi</button></a>
            </div>
        </div>
    </div>
</section>

<section id="testimonial">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Lowongan Terbaru</h2>
        </div>
        <div class="testimonial-slider owl-carousel">
            @foreach ($BKKDESC as $Data)
            <div class="single-slide">
                <div class="img">
                    <a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}"><img src="{{ URL::to('assets') }}/images/post/{{ $Data->gambar }}" alt=""></a>
                </div>
                <div class="content">
                    <p>{{$Data->judul}}</p>
                    <p>{{date("d M Y", strtotime($Data->tanggal))}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection