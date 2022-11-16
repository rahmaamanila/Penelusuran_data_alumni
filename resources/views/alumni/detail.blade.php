@section('menu','mainmenu')
@section('submenu','alumni1')
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
          <div class="col-md-8">
            <div class="card card-info card-outline">
              <div class="card-body box-profile">
                    <br/>
                                <div class="mb-3 row">
                                    <img src="{{ asset($alumni->foto == null ? 'img/poto.png' : 'img/'.$alumni->foto) }}" class="profile-user-img img-fluid zoom" height="128px" width="128px" alt="">
                                </div>
                                
                                <div class="row margin">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="nik" class="col-sm-6 col-form-label">Nik:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->nik }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Nama:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->nama }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-10 col-form-label">Tempat Lahir:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->tmpt_lahir }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row margin">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="nik" class="col-sm-10 col-form-label">Tanggal Lahir:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->tgl_lahir }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-10 col-form-label">Jenis Kelamin:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->jenkel }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Agama:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->agama }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row margin">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="nik" class="col-sm-6 col-form-label">No Telepon:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->no_telp }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Alamat:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->alamat }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Tahun Lulus:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->thn_lulus }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row margin">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="nik" class="col-sm-6 col-form-label">Angkatan:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->angkatan }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Email:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->email }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Status:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->status }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                        
                                <div class="row margin">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="nik" class="col-sm-6 col-form-label">Perusahaan:</label>
                                            <div class="col-sm-12">
                                                {{ !empty($alumni->id_perusahaan) ? $alumni->perusahaan->nm_perusahaan : '-'  }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-6 col-form-label">Jabatan:</label>
                                            <div class="col-sm-12">
                                                {{ !empty($alumni->id_jabatan) ? $alumni->jabatan->nm_jabatan : '-'  }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="thn_lulus" class="col-sm-10 col-form-label">Tanggal Masuk Kerja:</label>
                                            <div class="col-sm-12">
                                                {{ $alumni->tgl_masuk ?? '-' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="col-md">
                                    <!-- <a href="{{ session('alumni')->role === 'alumni' ? URL::to('alumni/index_alumni') : URL::to('alumni') }}" class="btn btn-primary">Kembali</a> -->
                                    <a href="/alumni" class="btn btn-primary btn-block">Kembali</a>
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

.margin{
    margin-left: 32px;
}
</style>
</body>
</html>
