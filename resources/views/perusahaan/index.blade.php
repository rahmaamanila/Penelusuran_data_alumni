@section('menu','mainmenu')
@section('submenu','perusahaan')
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
            <h1 class="m-0">Perusahaan</h1>
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
          {{session('Data dihapus')}}
        </div>
        @endif

        @if(session('Data ditambah'))
        <div class="alert alert-success" role="alert">
          {{session('Data ditambah')}}
        </div>
        @endif
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Lowongan Pekerjaan
                </div>
                <br> -->
                <div class="card-body">
                    <a href="/perusahaan/tambah" class="btn btn-info"><i class="bi bi-plus"></i>Tambah Perusahaan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped" id="table-data">
                        <thead>
                            <tr class="text-center table-info">
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th style="text-align: center;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perusahaan as $i => $p)
                            <tr class="text-center">
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nm_perusahaan }}</td>
                                <td>
                                  <a href="/perusahaan/delete/{{ $p->id_perusahaan }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')"><i class="bi bi-trash-fill"></i></a>
                                  <!-- <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $p->id_perusahaan }}" data-nama="{{ $p->nm_perusahaan }}"><i class="bi bi-trash-fill"></i></a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<!-- <script>
  $('.delete').click( function(){
    var perusahaanid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

          swal({
              title: "Yakin?",
              text: "Akan menghapus data perusahaan dengan nama "+nama+" ",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location = "/perusahaan/delete/"+perusahaanid+"",
                swal("Data berhasil dihapus", {
                  icon: "success",
              });
              } else {
                swal("Data tidak jadi dihapus");
              }
            });
  });

</script> -->
</body>
</html>
