@extends('Backend/main')
@section('title','Kontak Add')


@section('content')
           
        <section class="content"> 
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add Kontak</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form class="form-horizontal"  action="{{url('admin/Kontak')}}" method="post"enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nomor Hp</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="Hp" id="inputEmail3" placeholder="Masukan No Hp"  required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Masukan No Email"  required>
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

