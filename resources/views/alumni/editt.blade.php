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
            <h1 class="m-0">Edit Data Alumni rahma</h1>
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
                <!-- <div class="card-header text-center">
                    Edit Data Alumni
                </div> -->
                <div class="card-body">
                    <form method="post" action="/alumni/update/{{ $alumni->nik }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nik</label>
                            <input type="text" name="nik" class="form-control" value="{{ $alumni->nik }}" disabled>
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="nama alumni .." value="{{ $alumni->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                    <label for="tmpt_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" value="{{ $alumni->tmpt_lahir }}">
                                
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
                                    <input type="date" class="form-control" name="tgl_lahir" id="datePickerId" value="{{ $alumni->tgl_lahir }}">
                                
                                    @if($errors->has('tgl_lahir'))
                                        <div class="text-danger">
                                            {{ $errors->first('tgl_lahir')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                <label for="tmpt_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" value="{{ $alumni->tmpt_lahir }}">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="datePickerId" value="{{ $alumni->tgl_lahir }}">
                                </div>
                            </div>

                            @if($errors->has('tmpt_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tmpt_lahir')}}
                                </div>
                            @endif

                            @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
                        </div>
                        <br> -->

                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin</label> <br>
                            @if($alumni->jenkel == "laki-laki")
                            <div class="form-check">
                                <label for="jenkel">
                                    <input type="radio"  name="jenkel" id="jenkel" value="laki-laki" checked> Laki-laki
                                    <input type="radio" name="jenkel" id="jenkel" value="perempuan"> Perempuan
                                </label>
                            </div>
                            @elseif($alumni->jenkel == "perempuan")
                            <div class="form-check">
                                <label for="jenkel">
                                    <input type="radio"  name="jenkel" id="jenkel" value="laki-laki"> Laki-laki
                                    <input type="radio" name="jenkel" id="jenkel" value="perempuan" checked> Perempuan
                                </label>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                                <select class="form-control" name="agama" value="{{ $alumni->agama }}">
                                <option selected>Pilih agama</option>
                                <option value="islam" @if($alumni->agama == 'islam') selected @endif>Islam</option>
                                <option value="kristen"  @if($alumni->agama == 'kristen') selected @endif>Kristen</option>
                                <option value="katholik"  @if($alumni->agama == 'katholik') selected @endif>Katholik</option>
                                <option value="buddha"  @if($alumni->agama == 'buddha') selected @endif>Buddha</option>
                                <option value="konghucu"  @if($alumni->agama == 'konghucu') selected @endif>Konghucu</option>		
                                </select>
 
                             @if($errors->has('agama'))
                                <div class="text-danger">
                                    {{ $errors->first('agama')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" value="{{ $alumni->no_telp }}">
 
                            @if($errors->has('no_telp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telp')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control">{{ $alumni->alamat }}</textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tahun Lulus</label>
                                <select name="thn_lulus" id="thn_lulus" class="form-control">
                                    @for($i=date('Y'); $i>=date('Y')-16; $i-=1)
                                        @if($i == $alumni->thn_lulus)
                                            <option value="{{ $i }}" selected>{{ $alumni->thn_lulus }}</option>
                                        @elseif($i !== $alumni->thn_lulus)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endif 
                                    @endfor                    
                                </select>

                                @if($errors->has('thn_lulus'))
                                    <div class="text-danger">
                                        {{ $errors->first('thn_lulus')}}
                                    </div>
                                @endif
                        </div>

                        <div class="form-group">
                            <label>Angkatan</label>
                            <input type="text" name="angkatan" class="form-control" value="{{ $alumni->angkatan }}">
 
                            @if($errors->has('angkatan'))
                                <div class="text-danger">
                                    {{ $errors->first('angkatan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-floating">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $alumni->email }}">
                                
                                    @if($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-floating">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="datePickerId" value="{{ $alumni->password }}">
                                
                                @if($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password')}}
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $alumni->email }}">
 
                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="{{ $alumni->password }}">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
 
                        </div> -->

                        <div class="form-group">
                            <label>Status</label>
                                <select class="form-control" name="status">
                                <option value="bekerja" @if($alumni->status == 'bekerja') selected @endif>Bekerja</option>
                                <option value="belumbekerja" @if($alumni->status == 'belumbekerja') selected @endif>Belum Bekerja</option>		
                                </select>
 
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="class-perusahaan">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label>Perusahaan</label>
                                            <select class="form-control" name="id_perusahaan" id="id_perusahaan">
                                                <option value="">pilih perusahaan</option>
                                                @foreach($perusahaan as $item)
                                                    @if($item->id_perusahaan==$alumni->id_perusahaan)
                                                    <option value={{ $item->id_perusahaan }} selected>{{ $item->nm_perusahaan }}</option>
                                                    @else
                                                    <option value={{ $item->id_perusahaan }}>{{ $item->nm_perusahaan }}</option>
                                                    @endif
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
                                            <select class="form-control" name="id_jabatan" id="id_jabatan">
                                                <option value="">pilih perusahaan</option>
                                                @foreach($jabatan as $item)
                                                    @if($item->id_jabatan==$alumni->id_jabatan)
                                                    <option value={{ $item->id_jabatan }} selected>{{ $item->nm_jabatan }}</option>
                                                    @else
                                                    <option value={{ $item->id_jabatan }}>{{ $item->nm_jabatan }}</option>
                                                    @endif
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
                                            <input type="date" name="tgl_masuk" class="form-control" value="{{ $alumni->tgl_masuk }}">
                                        
                                        @if($errors->has('tgl_masuk'))
                                            <div class="text-danger">
                                                {{ $errors->first('tgl_masuk')}}
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <br>

                            <!-- <div class="form-group">
                                <label>Perusahaan</label>
                                    <select class="form-control" name="id_perusahaan" id="id_perusahaan">
                                        <option value="">pilih perusahaan</option>
                                        @foreach($perusahaan as $item)
                                            @if($item->id_perusahaan==$alumni->id_perusahaan)
                                            <option value={{ $item->id_perusahaan }} selected>{{ $item->nm_perusahaan }}</option>
                                            @else
                                            <option value={{ $item->id_perusahaan }}>{{ $item->nm_perusahaan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
    
                                @if($errors->has('id_perusahaan'))
                                    <div class="text-danger">
                                        {{ $errors->first('id_perusahaan')}}
                                    </div>
                                @endif
 
                            </div> -->

                            <!-- <div class="form-group">
                                <label>Jabatan</label>
                                    <select class="form-control" name="id_jabatan" id="id_jabatan">
                                        <option value="">pilih perusahaan</option>
                                        @foreach($jabatan as $item)
                                            @if($item->id_jabatan==$alumni->id_jabatan)
                                            <option value={{ $item->id_jabatan }} selected>{{ $item->nm_jabatan }}</option>
                                            @else
                                            <option value={{ $item->id_jabatan }}>{{ $item->nm_jabatan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
    
                                @if($errors->has('id_jabatan'))
                                    <div class="text-danger">
                                        {{ $errors->first('id_jabatan')}}
                                    </div>
                                @endif
 
                            </div> -->

                            <!-- <div class="form-group">
                                <label>Tanggal Masuk Kerja</label>
                                <input type="date" name="tgl_masuk" class="form-control" value="{{ $alumni->tgl_masuk }}">
    
                                @if($errors->has('tgl_masuk'))
                                    <div class="text-danger">
                                        {{ $errors->first('tgl_masuk')}}
                                    </div>
                                @endif
    
                            </div> -->
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Edit" onclick="return confirm('Yakin ingin mengedit data?')">
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
