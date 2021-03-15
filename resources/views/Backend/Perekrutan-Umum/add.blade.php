@extends('Backend/main')
@section('title','Institusi Pasangan Add')


@section('content')
           
        <section class="content"> 
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add Perekrutan Umum</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form class="form-horizontal"  action="{{url('admin/Perekrutan-Umum')}}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="judul" id="inputEmail3" placeholder="Masukan Judul"  required>
                        </div>
                      </div>
                      <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Konten</label>
                      <div class="col-md-10">
                        <div class="box box-info">
                          <div class="box-header">
                            <h3 class="box-title">CK Editor
                              <small>Advanced and full of features</small>
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                      title="Collapse">
                                <i class="fa fa-minus"></i></button>
                              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                      title="Remove">
                                <i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body pad">
                            
                                  <textarea id="editor1" name="konten" rows="10" cols="80">
                                                          Konten
                                  </textarea>
                            
                          </div>
                        </div>
                        <!-- /.box -->
                      </div>
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

@endsection
@section('scripts')
<!-- CK Editor -->
<script src="{{asset('AdminLTE/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
 <script>
   $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
     CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
  })
 </script>    
@endsection

