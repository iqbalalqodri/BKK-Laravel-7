@extends('Backend/main')
@section('title','Data Sekema Perekrutan')

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
                        {{-- <div class="pull-right">
                            <a href="{{url('admin/Sekema-Perekrutan/add')}}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Tambah Bkk
                                </a>
                            </div> --}}
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>

                            @foreach ($sekema as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->gambar}}</td>

                                <td>
                                    <a href="{{ url('admin/Sekema-Perekrutan/edit/'.$data->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    {{-- <form action="{{ url('admin/Sekema-Perekrutan/'.$data->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form> --}}
                                </td>
                             </tr>
                        
                            @endforeach  

                          </tbody>
                          <tfoot>
                          <tr>
                            <th>No.</th>
                            <th>Gambar</th>
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


