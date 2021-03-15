@extends('main')
@section('title','Kontak')
@section('content')
<section class="content">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-4">
                <div class="sidebar-item contact-information">
                  <div class="sidebar-heading">
                    <h2>Kontak  Informasi</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                      <h5>NOMOR TELPON :{{$Kontak->Hp}}</h5>
                        <span></span>
                      </li>
                      <li>
                        <h5>ALAMAT EMAIL :{{$Kontak->email}} </h5>
                        <span></span>
                      </li>
                      {{-- <li>
                        <h5>ALAMAT :Jl. Bandar Agung, Bandar Agung, Kec. 
                            Lahat, Kabupaten Lahat, Sumatera Selatan 31414
                        <span></span>
                      </li> --}}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        {{-- <div class="col-lg-12">
          <div id="map">
            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div> --}}
        
      </div>
    </div>
  </section>
@endsection


