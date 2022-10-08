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
          <div class="col-sm-6">
            <h1 class="m-0">Cetak Data Alumni</h1>
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
                <!-- <div class="card-header">
                    Periode Tahun
                </div> -->
                <!-- <h3>Periode Tahun</h3> -->
            
                <div class="card-body">
                    <a href="/alumni" class="btn btn-info"><i class="bi bi-back"></i> Kembali</a>
                    <br>
                    <br>
                    <div class="form-group mb-3">
                        <label>Periode Tahun</label>
                        <select name="thn_lulus" id="thn_lulus">
                            @for($i=date('Y'); $i>=date('Y')-16; $i-=1)
                              <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div>
                        <a href="#" onclick="this.href='/alumni/cetak_alumni_pertahun/'+document.getElementById('thn_lulus').value" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</a>
                        <a href="/alumni/cetak_alumni" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak Seluruh Data</a>
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

</body>
</html>
