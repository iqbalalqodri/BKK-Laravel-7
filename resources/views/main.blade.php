
<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>
<!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="top-number">
                            <p> <i class="fa fa-map-marker"></i> Jl Bandar Agung, Lahat Sumatera Selatan | <i class="fa fa-phone-square"></i> (0731) 323023 | <i class="fa fa-send"></i> email@smkn1lahat.sch.id</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                        
                            {{-- <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        @include('Template.navbar')
        <!--/nav-->

    </header>
    <!--/header-->

    @yield('carousel')

    {{-- <div class="page-title" style="background-image: url({{ asset('assets/images/page-title.png') }})">
        <h1>Blog</h1>
    </div> --}}

    @yield('content')<br>
    <!--/#blog-->

    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
            </div>
        </div>
    </section>
    <!--/#bottom-->
    <footer id="footer" class="midnight-blue">
        @include('Template.footer')
    </footer>
    <!--/#footer-->

    @include('Template.scripts')
</body>

</html>
