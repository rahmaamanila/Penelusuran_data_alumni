@section('menu','mainmenu')
@section('submenu','lowongan')
@section('submenu','low')
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0"><center>Tambah Lowongan</center></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content/buat bikin sesuatu -->
    <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Tambah Lowongan 
                </div> -->
                <div class="card-body">
                    <form method="post" action="/lowongan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul" required>
 
                            @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Pembuat</label>
                                <select class="form-control" name="nik">
                                    @foreach($alumni as $a)
                                    @if (session('alumni')->nik === $a->nik)
                                    <option value="{{ $a->nik }}" selected>{{ $a->nama }}</option>
                                    @endif
                                    @endforeach
                                </select>
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                          <label for="foto" class="form-label">Upload Gambar</label>
                          <div class="input-group mb-3">
                            <input type="file" name="foto" class="form-control" id="foto" required>
                          </div>
                        </div>

                        <!-- <div class="form-group">
                            <label>Gambar</label>
                            <div>
                              <input type="text" name="foto" class="form-control">
                            </div>
                            <div>
                              <input type="file" id="foto" name="foto">
                            </div>
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
 
                        </div> -->

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="keterangan tambahan" required></textarea>
 
                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="{{ session('alumni')->role === 'alumni' ? URL::to('lowongan/index_alumni') : URL::to('lowongan') }}" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')
</body>
</html>
