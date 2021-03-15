@extends('Backend/main')
@section('title','Sekema Perekrtuan Add')


@section('content')
           
        <section class="content"> 
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add Sekema Perekrtuan</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form class="form-horizontal"  action="{{url('admin/Sekema-Perekrutan')}}" method="post"enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="gambar" id="inputEmail3" placeholder="Masukan Gambar" autofocus required>
                        </div>
                      </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-info pull-right">add</button>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                </div>
        </div>
        </div>
        </section>

@endsection

