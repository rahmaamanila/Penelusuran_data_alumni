@section('menu','mainmenu')
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
          <div class="col-sm-6">
            <h1 class="m-0">Event</h1>
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
    <section class="content event-index">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="d-flex flex-wrap" style="gap: 20px;">
                @foreach($index_alumni as $p)
                <div class="box-photo text-center">
                  <p class="text-center">{{ $p->nm_event }}</p>
                  <img src="{{ url('/Gambar/'.$p->foto) }}" class="card-img-top zoom" alt="">
                  <a href="{{ asset('Gambar/'. $p->foto ) }}" rel="noopener noreferrer">lihat gambar</a>
                </div>
                @endforeach
              </div>
            <!-- <div class="class-group">
              <div class="card" style="width: 15rem; margin:2% 3% 3% 2%;">
                @foreach($index_alumni as $p)
                  <div class="d-flex flex-wrap">
                    <img src="{{ url('/Gambar/'.$p->foto) }}" class="card-img-top zoom" alt="">
                    <div class="card-body">
                      <p class="card-text">{{$p->keterangan}}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div> -->
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
  padding: 30px;
  /* background-color: green; */
  transition: transform .2s; /* Animation */
  max-width: 100%;
  max-height: 300px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>

<!-- <style type="text/css">
  body{
    background-color: #d3d3d3;
  }
  #navBar{
    text-decoration: none;
    color: #ffffff;
    margin: 3%;
    display: block;
  }
  .tengah{
    float: center;
    text-align: center;
    padding-top: 5%;
    color: #ffffff;
  }
  #search{
    margin-top: 1%;
    padding: 1% 25%;
    border: 1px solid #dbdbdb;
  }
</style> -->
</body>
</html>
