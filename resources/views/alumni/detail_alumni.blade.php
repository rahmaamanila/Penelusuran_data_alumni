@section('menu','mainmenu')
@section('submenu','alumni2')
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
            <h1 class="m-0"><center>Detail Data Alumni</center></h1>
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
    <div class="container-fluid">
        <!-- <div class="card mt-2">
            <div class="card-body"> -->
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card card-info card-outline">
              <div class="card-body box-profile">
                <!-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset('Gambar/poto.png')}}" alt="user foto" >
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/'. $alumni->foto ) ?? ''}}" alt="">
                </div><br> -->
                        
                            <!-- <form method="post" action="/alumni/index/{{ $alumni->nik }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }} -->

                                <div class="mb-3 row">
                                    <img src="{{ asset($alumni->foto == null ? 'img/poto.png' : 'img/'.$alumni->foto) }}" class="profile-user-img img-fluid zoom" height="128px" width="128px" alt="">
                                </div>  

                                <div class="row text-center">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="nik" class="col-sm-6 col-form-label">Nik</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->nik }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="nama" class="col-sm-6 col-form-label">Nama</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->nama }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                
                                <div class="row text-center">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="jenkel" class="col-sm-6 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->jenkel }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="agama" class="col-sm-6 col-form-label">Agama</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->agama }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row text-center">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Tahun Lulus</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->thn_lulus }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="angkatan" class="col-sm-6 col-form-label">Angkatan</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->angkatan }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row text-center">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="alamat" class="col-sm-6 col-form-label">Alamat</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->alamat }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="status" class="col-sm-6 col-form-label">Status</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->status }}
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row text-center">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="id_perusahaan" class="col-sm-12 col-form-label">Perusahaan</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ !empty($alumni->id_perusahaan) ? $alumni->perusahaan->nm_perusahaan : '-'  }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="id_jabatan" class="col-sm-12 col-form-label">Jabatan</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ !empty($alumni->id_jabatan) ? $alumni->jabatan->nm_jabatan : '-'  }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="tgl_masuk" class="col-sm-12 col-form-label">Tanggal Masuk Kerja</label>
                                            <div class="col-sm-12">
                                                <b>:</b> {{ $alumni->tgl_masuk ?? '-' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row text-center">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <div class="col-sm-12">
                                                <a href="/alumni/index_alumni" class="btn btn-primary btn-block">Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<style>
.zoom {
  /* padding: 30px; */
  /* background-color: green; */
  transition: transform .2s; /* Animation */
  max-width: 100%;
  max-height: 300px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>
</body>
</html>
