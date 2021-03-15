@extends('Backend/main')
@section('title','Data Profil Latar Belakang')

@section('content-header')
<section class="content-header">
    <h1>
      @yield('title')
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">@yield('title')</li>
    </ol>
  </section>
    
@endsection


@section('content')
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">

                @if (session('status'))
                    <div class="alert alert-success">
                      {{ session('status') }}
                   </div>
                   @endif
                   @if (session('status_hapus'))
                   <div class="alert alert-danger">
                     {{ session('status_hapus') }}
                  </div>
                @endif
                @if (session('status_edit'))
                   <div class="alert alert-warning">
                     {{ session('status_edit') }}
                  </div>
                @endif
                <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>

                            @foreach ($Profil as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td >{{$data->judul}}</td>
                                <td>{!!substr($data->konten,0,500) !!}[.....]</td>
                                <td>
                                    <a href="{{ url('admin/Profil-Latar-Belakang/edit/'.$data->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"> Update</i>
                                    </a>
                                </td>
                             </tr>
                        
                            @endforeach  

                          </tbody>
                          <tfoot>
                          <tr>
                            <th>No.</th>
                            <th><div style="width:200px;">Judul</div></th>
                            <th>Konten</th>
                            <th>Aksi</th>
                          </tr>
                          </tfoot>
                        </table>
                        {{-- Halaman : {{ $BKK->currentPage() }} <br/>
                        Jumlah Data : {{ $BKK->total() }} <br/>
                        Data Per Halaman : {{ $BKK->perPage() }} <br/> --}}
                        {{-- {{ $BKK->links() }} --}}
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>

    </div>
    <!-- /.row (main row) -->
    

</section>
    
@endsection


