@extends('Backend/main')
@section('title','Kontak Edit')

    @section('breadcrumbs')
    <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Kontak Edit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Kontak Data</li>
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
            <h3 class="box-title">Edit Kontak</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal"  action="{{url('admin/Kontak/'.$Kontak->id)}}" method="post">
            @method('PATCH')
            {{ csrf_field() }}
            

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nomor Hp</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Hp" id="inputEmail3" placeholder="Masukan No Hp"  value="{{$Kontak->Hp}}" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Masukan Email" value="{{$Kontak->email}}" required>
                </div>
              </div>
              
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-default" href="{{url('admin/Kontak')}}">cancel</a>
              <button type="submit" class="btn btn-info pull-right">edit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
   </div>
 </div>
</section>     

@endsection

