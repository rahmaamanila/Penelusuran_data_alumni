@section('menu','dashboard')
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
            <h1 class="m-0"><center>Perancangan Program Penelusuran Data Alumni SMK Informatika Utama</center></h1>
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
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3>{{ $jumlah_alumni }}</h3>

                <p>Jumlah Data Alumni</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-users"></i>
              </div>
              <!-- <a href="{{ route('alumni') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlah_lowongan }}</h3>

                <p>Jumlah Lowongan</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-briefcase"></i>
              </div>
              <!-- <a href="{{ route('lowongan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlah_event }}</h3>

                <p>Jumlah Event</p>
              </div>
              <div class="icon">
                <i class="fas fa-regular fa-calendar"></i>
              </div>
              <!-- <a href="{{ route('event') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          @if (auth()->user()->role == "admin")
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3>{{ $jumlah_perusahaan }}</h3>

                <p>Jumlah Perusahaan</p>
              </div>
              <div class="icon">
                <i class="fas fa-regular fa-building"></i>
              </div>
              <!-- <a href="{{ route('perusahaan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          @endif
          @if (auth()->user()->role == "admin")
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlah_jabatan }}</h3>

                <p>Jumlah Jabatan</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-layer-group"></i>
              </div>
              <!-- <a href="{{ route('jabatan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          @endif

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row col-12">
          <div class="col-md-3">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><i class="bi bi-telephone-fill"></i> Kontak Admin</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                Hubungi 085772945816
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <!-- <div class="col-md-4">
            <div class="card card-lightblue">
              <div class="card-header">
                <h3 class="card-title">Info Event</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>

              <div class="card-body">
                <ul class="list-group list-group-flush">
                  @foreach($event as $p)
                  <li class="list-group-item"> 
                    <div>{{ $p->nm_event }}</div> 
                    <div>Mulai = {{ $p->awal_event }}</div> 
                    <div>Selesai = {{ $p->selesai_event }}</div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div> -->

          <!-- PIE CHART -->
          <div class="col-md-4">
            <div class="card card-info">
              <div class="card-header">
                  <h3 class="card-title">Jenis Kelamin</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%"></canvas>

                <script>
                  var xValues = [ "Laki-Laki", "Perempuan"];
                  var yValues = {{ json_encode($jumlah_alumni_jenkel) }};
                  var barColors = [
                    "#00aba9",
                    "#e8c3b9"
                  ];

                  new Chart("myChart", {
                    type: "pie",
                    data: {
                      labels: xValues,
                      datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                      }]
                    },
                    options: {
                      title: {
                        display: true,
                        text: "Jenis Kelamin"
                      }
                    }
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
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
