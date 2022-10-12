@section('menu','mainmenu')
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
            <h1 class="m-0"><center>Lowongan Pekerjaan</center></h1>
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
                    <a href="/lowongan/tambah" class="btn btn-info"><i class="bi bi-plus"></i>Tambah</a>
                    <br/>
                    <br/>

                    <table class="table table-bordered table-hover table-striped">
                            @foreach($index_alumni as $p)
                            <tr>
                                <td width="50%" class="text-center">
                                  <img src="{{ asset('img/'. $p->foto ) }}" height="20%" width="30%" alt="">
                                  <!-- <a href="{{ asset('img/'. $p->foto ) }}" target="_blank" rel="noopener noreferrer">lihat gambar</a> -->
                                </td>
                                <td>{{ $p->keterangan }}</td>
                                <td class="text-center">
                                    <!-- <a href="/lowongan/edit/{{ $p->id_lowongan }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a> -->
                                    <a href="/lowongan/detail/{{ $p->id_lowongan }}" class="btn btn-warning btn-sm"><i class="bi bi-eye-fill"></i></a>
                                </td>
                                </td>
                            </tr>
                            @endforeach
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
<script>
$('.delete').click( function(){
    var lowonganid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

          swal({
              title: "Yakin?",
              text: "Akan menghapus data lowongan dengan judul "+nama+" ",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location = "/lowongan/delete/"+lowonganid+"",
                swal("Data berhasil dihapus", {
                  icon: "success",
              });
              } else {
                swal("Data tidak jadi dihapus");
              }
            });
  });

</script>
</body>
</html>
