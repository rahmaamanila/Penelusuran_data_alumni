@section('menu','mainmenu')
@section('submenu','event')
@section('submenu','ev')
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
            <h1 class="m-0"><center>Tambah Event</center></h1>
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
                    Tambah Event 
                </div> -->
                <div class="card-body">

                    <form method="post" action="/event/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Pembuat</label>
                                <select class="form-control" name="nik">
                                    @foreach($alumni as $p)
                                      <option value="{{ $p->nik }}">{{ $p->nama }}</option>
                                    @endforeach

                                    <!-- @foreach($alumni as $a)
                                    @if (session('alumni')->nik === $a->nik)
                                    <option value="{{ $a->nik }}" selected>{{ $a->nama }}</option>
                                    @endif
                                    @endforeach -->
                                </select>
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama Event</label>
                            <input type="text" name="nm_event" class="form-control" placeholder="Nama Event" value="{{ old('nm_event') }}" autocomplete="off">
 
                            @if($errors->has('nm_event'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_event')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="date" name="awal_event" class="form-control" placeholder="Tanggal Awal" value="{{ old('awal_event') }}">
 
                            @if($errors->has('awal_event'))
                                <div class="text-danger">
                                    {{ $errors->first('awal_event')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="selesai_event" class="form-control" placeholder="Tanggal Selesai" value="{{ old('selesai_event') }}">
 
                            @if($errors->has('selesai_event'))
                                <div class="text-danger">
                                    {{ $errors->first('selesai_event')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Tambah Keterangan">{{ old('keterangan') }}</textarea>
 
                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                          <label for="foto" class="form-label">Upload Gambar</label>
                          <div class="input-group mb-3">
                            <input type="file" name="foto" class="form-control" id="foto">
                          </div>
                          @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="{{ session('alumni')->role === 'alumni' ? URL::to('event/index_alumni') : URL::to('event') }}" class="btn btn-primary">Kembali</a>
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
