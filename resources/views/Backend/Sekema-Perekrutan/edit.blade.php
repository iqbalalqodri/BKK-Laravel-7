@extends('Backend/main')
@section('title','Bursah Kerja Khusus Edit')

    @section('breadcrumbs')
    <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Bursah Kerja Khusus Edit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Bursah Kerja Khusus Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
 <section class="content">      
  <div class="row">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Bursah Kerja Khusus</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal"  action="{{url('admin/Sekema-Perekrutan/'.$sekema->id)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{ csrf_field() }}
            
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="gambar" id="inputEmail3" placeholder="Masukan Gambar" value="{{$sekema->gambar}}" required >
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-default" href="{{url('admin/Sekema-Perekrutan')}}">cancel</a>
              <button type="submit" class="btn btn-info pull-right">edit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
   </div>
 </div>
</section>     

@endsection

