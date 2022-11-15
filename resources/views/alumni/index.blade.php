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
            <h1 class="m-0"> <center>Penelusuran Data Alumni</center></h1>
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
      @if(session('Data dihapus'))
        <div class="alert alert-danger" role="alert">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>  -->
          {{session('Data dihapus')}}
        </div>
        @endif

      @if(session('Data diedit'))
        <div class="alert alert-success" role="alert">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>  -->
          {{session('Data diedit')}}
        </div>
        @endif

      @if(session('Data ditambah'))
        <div class="alert alert-success" role="alert">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>  -->
          {{session('Data ditambah')}}
        </div>
        @endif

            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    alumni
                </div>
                <br> -->
                
                <div class="card-body">
                    <a href="/alumni/tambah" class="btn btn-info"><i class="bi bi-plus"></i>Tambah Data</a>
                    <!-- <a href="/alumni/cetak_alumni_form" class="btn btn-default" data-toggle="tooltip" title="Cetak"><i class="fas fa-print"></i></a> -->
                    <a href="/alumni/cetak_alumni" target="_blank" class="btn btn-default" data-toggle="tooltip" title="Cetak seluruh data"><i class="fas fa-print"></i></a>
                    <br/>
                    <br>

                  <form action="{{route('alumni')}}" method="GET">

                    <table class="table table-bordered table-hover table-striped" id="table-data">
                        <thead>
                            <tr class="text-center table-info">
                                <th>No</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahun Lulus</th>
                                <th>Angkatan</th>
                                <th>Status</th>
                                <th style="text-align: center;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumni as $i => $p)
                            <tr class="text-center">
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->jenkel }}</td>
                                <td>{{ $p->thn_lulus }}</td>
                                <td>{{ $p->angkatan }}</td>
                                <td>{{ $p->status }}</td>
                                <td>
                                    <a href="/alumni/editt/{{ $p->nik }}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="/alumni/detail/{{ $p->nik }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Detail"><i class="bi bi-eye-fill"></i></a>
                                    <a href="/alumni/delete/{{ $p->nik }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')" data-toggle="tooltip" title="Hapus"><i class="bi bi-trash-fill"></i></a>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>
</body>
</html>
