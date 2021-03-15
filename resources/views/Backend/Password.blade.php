@extends('Backend/main')
@section('title','Password')

    @section('breadcrumbs')
    <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Password Edit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Password Data</li>
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
            <h3 class="box-title">Edit Password</h3>
          </div>

          @if (session('status_edit'))
                   <div class="alert alert-success">
                     {{ session('status_edit') }}
                  </div>
                @endif
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal"  action="{{url('admin/Password/'.$Password->id)}}" method="post">
            @method('PATCH')
            {{ csrf_field() }}
            

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputEmail3" placeholder="Nama" value="{{$Password->name}}" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" value="{{$Password->email}}" required>
                </div>
              </div>


              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Password Baru</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Password" id="inputEmail3" placeholder="Ganti Password"  required>
                </div>
              </div>
              
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-warning pull-left">Submit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
   </div>
 </div>
</section>     

@endsection

