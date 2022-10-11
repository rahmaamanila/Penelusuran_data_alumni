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
            <h1 class="m-0"><center>Edit Email dan Password</center></h1>
          </div>
          <!-- /.col -->
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
      @if(session('Data diedit'))
        <div class="alert alert-success" role="alert">
          {{session('Data diedit')}}
        </div>
        @endif
      <div class="container-fluid text-center">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card card-info card-outline">
              <div class="card-body box-profile">
                <!-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div> -->

                <div class="profile-username text-center">
                    @if (Auth::guard('alumni')->user())
                    <h3 class="d-block nav-link dropdown-item">{{ Auth::guard('alumni')->user()->name }}</h3>
                    @elseif (Auth::guard('user')->user())
                    <h3 class="d-block nav-link dropdown-item">{{ Auth::guard('user')->user()->name }}</h3>
                    @endif
                </div>

                    @if (Auth::guard('alumni')->user())
                    <p class="text-muted text-center">{{ Auth::guard('alumni')->user()->role }}</p>
                    @elseif (Auth::guard('user')->user())
                    <p class="text-muted text-center">{{ Auth::guard('user')->user()->role }}</p>
                    @endif

                <form action="/alumni/profile" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                  <!-- <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Ubah Nama</label>
                    <div class="col-sm-10">
                      <input type="name" name="name" class="form-control" id="name">
                    </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Ubah Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
                  </div> 

                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Ubah Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                  </div> 

                  <button type="submit" class="btn btn-info btn-block"><b><i class="bi bi-pencil-fill"></i> Edit</b></button>
                </form>
              </div>
              <!-- /.card-body -->
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