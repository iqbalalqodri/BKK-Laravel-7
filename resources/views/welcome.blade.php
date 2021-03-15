{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}





<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title> @yield('title') -SMK N 1 LAHAT</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('style/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    {{-- {{asset('style/')}} --}}
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('style/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/templatemo-stand-blog.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/owl.css')}}">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>SMK N 1 LAHAT<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="{{ Request::is('/')? "nav-item active":"" }}">
                <a class="nav-link" href="{{ url('/') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="{{ Request::is('profil')? "nav-item active":"" }}">
                <a class="nav-link" href="{{ url('profil') }}">Profil</a>
              </li>
              <li class="{{ Request::is('Kegiatan')? "nav-item active":"" }}">
                <a class="nav-link" href="{{ url('Kegiatan') }}">Kegiatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Perekrutan</a>
              </li>
              <li class="{{ Request::is('Lowongan-Pekerjaan')? "nav-item active":"" }}">
                <a class="nav-link" href="{{ url('Lowongan-Pekerjaan') }}">Lowongan Kerja</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Institusi Pasangan</a>
              </li>
              <li class="{{ Request::is('Kontak')? "nav-item active":"" }}">
                <a class="nav-link" href="{{ url('Kontak') }}">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    @yield('main-banner header-text')

    @yield('heading-page header-text')

        @yield('blog-posts')
    

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 SMK N 1 LAHAT.
                    
                 {{-- | Design: <a rel="nofollow" href="" target="_parent"></a> --}}
                </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('style/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    
    <script src="{{asset('style/assets/js/custom.js')}}"></script>
    <script src="{{asset('style/assets/js/owl.js')}}"></script>
    <script src="{{asset('style/assets/js/slick.js')}}"></script>
    <script src="{{asset('style/assets/js/isotope.js')}}"></script>
    <script src="{{asset('style/assets/js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>

