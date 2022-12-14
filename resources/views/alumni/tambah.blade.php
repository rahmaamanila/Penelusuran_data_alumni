@section('menu','mainmenu')
@section('submenu','alumni1')
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
            <h1 class="m-0"><center>Tambah Data Alumni</center></h1>
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
                <div class="card-body">
                    <form method="post" action="/alumni/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                    <label>NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" value="{{ old('nik') }}" autocomplete="off">
        
                                    @if($errors->has('nik'))
                                        <div class="text-danger">
                                            {{ $errors->first('nik')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md">
                                <div class="form-floating">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama') }}" autocomplete="off">
        
                                    @if($errors->has('nama'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                    <label for="tmpt_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" placeholder="Tempat Lahir" value="{{ old('tmpt_lahir') }}" autocomplete="off">
                                    
                                    @if($errors->has('tmpt_lahir'))
                                        <div class="text-danger">
                                            {{ $errors->first('tmpt_lahir')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md">
                                <div class="form-floating">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" id="datePickerId" value="{{ old('tgl_lahir') }}" autocomplete="off">
                                    
                                    @if($errors->has('tgl_lahir'))
                                        <div class="text-danger">
                                            {{ $errors->first('tgl_lahir')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input  type="radio" name="jenkel" id="jenkel" value="laki-laki" checked> Laki-laki
                                <input  type="radio" name="jenkel" id="jenkel" value="perempuan"> Perempuan
                            </div>
                            
                            @if($errors->has('jenkel'))
                                <div class="text-danger">
                                    {{ $errors->first('jenkel')}}
                                </div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                    <label>Agama</label>
                                        <select class="form-control" name="agama" value="{{ old('agama') }}">
                                            <option value="">Pilih agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katholik">Katholik</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="onghucu">Konghucu</option>		
                                        </select>
        
                                    @if($errors->has('agama'))
                                        <div class="text-danger">
                                            {{ $errors->first('agama')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md">
                                <div class="form-floating">
                                    <label>No Telepon</label>
                                    <input type="number" name="no_telp" class="form-control" placeholder="Masukkan No Telepon" value="{{ old('no_telp') }}" autocomplete="off">
        
                                    @if($errors->has('no_telp'))
                                        <div class="text-danger">
                                            {{ $errors->first('no_telp')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                    <label>Tahun Lulus</label>
                                    <select name="thn_lulus" id="thn_lulus" class="form-control" value="{{ old('thn_lulus') }}">
                                        @for($i=date('Y'); $i>=date('Y')-16; $i-=1)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>

                                    @if($errors->has('thn_lulus'))
                                        <div class="text-danger">
                                            {{ $errors->first('thn_lulus')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md">
                                <div class="form-floating">
                                    <label>Angkatan</label>
                                    <input type="number" name="angkatan" class="form-control" placeholder="Angkatan" value="{{ old('angkatan') }}" autocomplete="off">
                
                                    @if($errors->has('angkatan'))
                                        <div class="text-danger">
                                            {{ $errors->first('angkatan')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{ old('email') }}" autocomplete="off">
                            
                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="{{ old('password') }}">  

                                @if($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                <label for="foto" class="form-label">Upload Gambar</label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="foto" class="form-control" id="foto">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md">
                                <div class="form-floating">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="">Pilih Status</option>
                                        <option value="bekerja">Bekerja</option>
                                        <option value="belumbekerja">Belum Bekerja</option>		
                                    </select>
        
                                    @if($errors->has('status'))
                                        <div class="text-danger">
                                            {{ $errors->first('status')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div class="class-perusahaan">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label>Perusahaan</label>
                                            <select class="form-control" name="id_perusahaan">
                                                <option value="">Pilih Perusahaan</option>
                                                @foreach($perusahaan as $p)
                                                <option value="{{ $p->id_perusahaan }}">{{ $p->nm_perusahaan }}</option>
                                                @endforeach
                                            </select>
                                            
                                            @if($errors->has('id_perusahaan'))
                                                <div class="text-danger">
                                                    {{ $errors->first('id_perusahaan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label>Jabatan</label>
                                            <select class="form-control" name="id_jabatan">
                                                <option value="">Pilih Jabatan</option>
                                                @foreach($jabatan as $j)
                                                <option value="{{ $j->id_jabatan }}">{{ $j->nm_jabatan }}</option>
                                                @endforeach
                                            </select>

                                             @if($errors->has('id_jabatan'))
                                                <div class="text-danger">
                                                    {{ $errors->first('id_jabatan')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label>Tanggal Masuk Kerja</label>
                                            <input type="date" name="tgl_masuk" class="form-control" placeholder="" value="{{ old('tgl_masuk') }}">
                                        
                                            @if($errors->has('tgl_masuk'))
                                                <div class="text-danger">
                                                    {{ $errors->first('tgl_masuk')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/alumni" class="btn btn-primary">Kembali</a>
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
<script>
    $(document).ready(function(){
        $(document).on('change','select[name="status"]', function(){
            let valStatus = $('select[name="status"] option:selected').val();
            if(valStatus == 'belumbekerja'){
                $('.class-perusahaan').hide();
            }else{
                $('.class-perusahaan').show();
            }
        })
    })

    $(document).ready(function(){
        datePickerId.max = new Date().toISOString(). split("T")[0];
    })
</script>
</body>
</html>
