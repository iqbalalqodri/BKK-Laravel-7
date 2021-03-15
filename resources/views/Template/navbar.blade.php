<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/LOGO_BKK.png') }}" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? "active":"" }}"><a href="{{url('/')}}">Home</a></li>
                <li class="dropdown {{ Request::is('Profil-Latar-Belakang')||Request::is('Profil-Dasar-Pemikiran')||Request::is('Profil-visi-misi-moto')? "active":"" }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('Profil-Latar-Belakang') ? "active":"" }}"><a href="{{url('Profil-Latar-Belakang')}}">Latar Belakang</a></li>
                        <li class="{{ Request::is('Profil-Dasar-Pemikiran') ? "active":"" }}"><a href="{{url('Profil-Dasar-Pemikiran')}}">Dasar Pemikiran</a></li>
                        <li class="{{ Request::is('Profil-visi-misi-moto') ? "active":"" }}"><a href="{{url('Profil-visi-misi-moto')}}">Profil visi misi moto</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('Kegiatan') ? "active":"" }}"><a href="{{url('Kegiatan')}}">Kegiatan</a></li>
                <li class="dropdown {{ Request::is('Perekrutan-Umum')||Request::is('Sekema-Perekrutan')? "active":"" }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Perekrutan <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('Perekrutan-Umum') ? "active":"" }}"><a href="{{url('Perekrutan-Umum')}}">Perekrutan Umum</a></li>
                        <li class="{{ Request::is('Sekema-Perekrutan') ? "active":"" }}"><a href="{{url('Sekema-Perekrutan')}}">Skema Perekrutan</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('Institusi-Pasangan') ? "active":"" }}"><a href="{{url('Institusi-Pasangan')}}">Institusi Pasangan</a></li>

                <li class="{{ Request::is('Kontak') ? "active":"" }}"><a href="{{url('Kontak')}}">Kontak</a></li>
            <li class="{{ Request::is('Lowongan-Pekerjaan')||Request::is('Lowongan-Pekerjaan/cari')? "active":"" }}"><a href="{{url('Lowongan-Pekerjaan')}}">Lowongan Pekerjaan</a></li>
            </ul>
        </div>
    </div>
    <!--/.container-->
</nav>