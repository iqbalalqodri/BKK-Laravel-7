@extends('main')
@section('title','Detail Lowongan-Pekerjaan')


@section('content')
 <section id="blog">

    <div class="blog container">
        {{-- Lowongan Pekerjaan Terbaru --}}
        <div class="row">
            <hr>
        <h1> Detail Lowongan Pekerjaan</h1>
                <hr>
              @if (isset($BKK))
            <div class="col-md-8">
                <div class="blog-item">
                    <a href="{{ url('Detail-Lowongan-Pekerjaan/'.$BKK->id_bkk) }}"><img class="img-responsive img-blog" src="{{ URL::to('assets') }}/images/post/{{ $BKK->gambar }}" width="100%" alt="" /></a>
                    <div class="blog-content">
                        {{-- <a href="#" class="blog_cat">UI/UX DESIGN</a> --}}
                        <h2><a href="">{{$BKK->judul}}</a></h2>
                        <p>{{date("d M Y", strtotime($BKK->tanggal))}}</p>
                         {!!$BKK->konten!!}
                    </div>
                </div>
                <!--/.blog-item-->
            </div>
            <aside class="col-md-4">
              {{-- <div class="widget search">
                  <form role="form" action="{{url('Lowongan-Pekerjaan/cari')}}" method="GET">
                      {{ csrf_field() }}
                      <input type="text" name="cari" class="form-control search_box"  placeholder="Cari Lowongan Pekerjaan" value="{{ old('cari') }}">
                      <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                  </form>
              </div> --}}
              <!--/.search-->
              

              <div class="widget popular_post">
                  <h3>Popular Post</h3>
                  <ul>
                      @foreach ($BKKDESC as $Data)
                      <li>
                          <a href="{{ url('Detail-Lowongan-Pekerjaan/'.$Data->id_bkk) }}">
                              <img src="{{ URL::to('assets') }}/images/post/{{ $Data->gambar }}" alt="">
                              <p>{{$Data->judul}}</p>
                        <p>{{date("d M Y", strtotime($Data->tanggal))}}</p>

                          </a>
                      </li>
                      @endforeach
                  </ul>
              </div>
              <!--/.archieve-->
              
          </aside>
            @else {!!"<div class='col-md-8'>
                      <div class='blog-item'>
                        maaf data Tidak Ada
                      </div>
                      
              "!!}
            @endif           
            <!--/.col-md-4-->
            
            
        </div>
        {{-- / Lowongan Pekerjaan--}}
        <!--/.row-->
    </div>
</section>
@endsection


















@section('page-header')
 @if (isset($BKK))
    <!-- Page Header -->
    <div class="row">
      <center>
      <div class="col-md-8">
        <div class="post">
        <a class="post-img" href=""><img src="{{ URL::to('assets') }}/images/post/{{ $BKK->gambar }}" alt=""></a>
        </div>
      </div>  
    </center>
    </div>           
@endsection
@section('section')
<section class="section">
    <div class="container">
        
        <p style="text-align: center;"><strong></strong></p> 
          {!! $BKK->konten !!}

        {{-- <p>  --}}
          <?php 
        // $nub = $BKK->konten;
        // echo   wordwrap($nub,1000,"<br>\n <br>\n") 
        ?>
      {{-- </p> --}}
        @else {{ 'maaf data tidak ada' }}
        @endif
    </div>
  </section>
    
@endsection


























{{-- @section('content')
<section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="all-blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="blog-post">
                  @if (isset($BKK))
                    
                  <div class="blog-thumb">
                    <img src="{{ URL::to('style') }}/assets/images/{{ $BKK->gambar }}" alt="image" class="img-fluid" />
                  </div>
                  <div class="down-content">
                    <span></span>
                  <a href="post-details.html"><h4>{{$BKK->judul}}</h4></a>
                    <ul class="post-info">
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">May 12, 2020</a></li>
                    </ul>
                    <p>
                        {{$BKK->konten}}
                    </p>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a>,</li>
                            <li><a href="#"> Twitter</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  @else {{ 'maaf data tidak ada' }}
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </section>


    
@endsection --}}