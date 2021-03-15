@extends('main')
@section('title','Lowongan-Pekerjaan')


@section('content')
 <section id="blog">

    <div class="blog container">
        {{-- Lowongan Pekerjaan Terbaru --}}
        <div class="row">
            <hr>
                <div class="row">
                    <div class="col-md-8">
                    <h1> Lowongan Pekerjaan</h1>
                    </div>
                    <div class="col-md-3">
                        <div class="widget search">
                            <form role="form" action="{{url('Lowongan-Pekerjaan/cari')}}" method="GET">
                                {{ csrf_field() }}
                                <input type="text" name="cari" class="form-control search_box" autocomplete="off"  placeholder="Cari Lowongan Pekerjaan" value="{{ old('cari') }}">
                                <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        </div>
                </div>
            <hr>
            @foreach ($BKK as $Data)
             <div class="col-md-3">
                <div class="blog-item">
                    <a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}"><img class="img-responsive img-blog" src="{{ URL::to('assets') }}/images/post/{{ $Data->gambar }}" width="100%" alt="" /></a>
                    <div class="blog-content">
                        {{-- <a href="#" class="blog_cat">UI/UX DESIGN</a> --}}
                        <h2><a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}">{{$Data->judul}}</a></h2>
                        <p>{{date("d M Y", strtotime($Data->tanggal))}}</p>
                        <h3>{!!substr($Data->konten,0,300) !!}</h3>
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
        <aside class="col-md-4">
            <!--/.search-->
        </aside>
     </div>



        <div class="row">
            <div class="col-md-12 text-center">
                {{ $BKK->links() }}                       
            </div>
        </div>
    </div>

    <section id="testimonial"><br><br>
        <div class="container">
            <div class="center fadeInDown">
                <h2>Populer Post</h2>
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
</section>
@endsection

