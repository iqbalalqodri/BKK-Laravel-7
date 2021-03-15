@extends('Backend/main')
@section('title','Profil Edit')

    @section('breadcrumbs')
    <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Profil Edit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Profil Data</li>
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
            <h3 class="box-title">Edit Profil</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal"  action="{{url('admin/Profil-Latar-Belakang/'.$Profil->id)}}" method="post" >
            @method('PATCH')
            {{ csrf_field() }}
            
            <div class="box-body">


              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" id="inputEmail3" placeholder="Masukan Judul" value="{{$Profil->judul}}"  required>
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
                            {{$Profil->konten}}
                          </textarea>
                    
                  </div>
                </div>
                <!-- /.box -->
              </div>
              </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-default" href="{{url('admin/Profil-Latar-Belakang')}}">cancel</a>
              <button type="submit" class="btn btn-info pull-right">edit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
   </div>
 </div>
</section>     

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

