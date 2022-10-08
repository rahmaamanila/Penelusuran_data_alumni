
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Registrasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="#"><b>Registrasi</b></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">

                    <form action="/simpanregistrasi" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nik</label>
                            <input type="number" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" value="{{ old('nik') }}">
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama') }}">
 
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
                                    <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" placeholder="Tempat Lahir" value="{{ old('tmpt_lahir') }}">
                                
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
                                    <input type="date" class="form-control" name="tgl_lahir" id="datePickerId" value="{{ old('tgl_lahir') }}">
                                
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
                                <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="laki-laki" checked> Laki-laki
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="perempuan"> Perempuan
                            </div>
                           
                            @if($errors->has('jenkel'))
                                <div class="text-danger">
                                    {{ $errors->first('jenkel')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
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

                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="number" name="no_telp" class="form-control" placeholder="Masukkan Nomer Telepon" value="{{ old('no_telp') }}">
 
                            @if($errors->has('no_telp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telp')}}
                                </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat">{{ old('thn_lulus') }}</textarea>
 
                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tahun Lulus</label>
                                <!-- <input type="number" name="thn_lulus" class="form-control" placeholder="Masukkan Tahun" value="{{ old('thn_lulus') }}"> -->
                                <select name="thn_lulus" id="thn_lulus" value="{{ old('thn_lulus') }}">
                                    @for($i=date('Y'); $i>=date('Y')-32; $i-=1)
                                        <option value="{{ $i }}">{{ $i }}</option>
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
                            <input type="number" name="angkatan" class="form-control" placeholder="Angkatan" value="{{ old('angkatan') }}">
        
                            @if($errors->has('angkatan'))
                                <div class="text-danger">
                                    {{ $errors->first('angkatan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{ old('email') }}">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="{{ old('password') }}">

                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                                <select class="form-control" name="status" value="{{ old('status') }}">
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

                            <div class="class-perusahaan">
                                <!-- <div class="form-group">
                                    <label>Perusahaan</label>
                                        <select class="form-control" name="id_perusahaan" value="{{ old('id_perusahaan') }}">
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
                                </div> -->

                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label>Perusahaan</label>
                                            <select class="form-control" name="id_perusahaan" value="{{ old('id_perusahaan') }}">
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
                                            <select class="form-control" name="id_jabatan" value="{{ old('id_jabatan') }}">
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
                                </div>
                                <br>

                                <!-- <div class="form-group">
                                    <label>Jabatan</label>
                                        <select class="form-control" name="id_jabatan" value="{{ old('id_jabatan') }}">
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
                                </div> -->
                            
                                <div class="form-group">
                                    <label>Tanggal Masuk Kerja</label>
                                    <input type="date" name="tgl_masuk" class="form-control" placeholder="" value="{{ old('tgl_masuk') }}">

                                @if($errors->has('tgl_masuk'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_masuk')}}
                                </div>
                                @endif
                                </div>
                            </div>

                          <div class="form-group">
                            <label>Masuk Sebagai</label>
                                <select class="form-control" name="role" value="{{ old('role') }}">
                                <option value="alumni">Alumni</option>
                                </select>
 
                            @if($errors->has('role'))
                            <div class="text-danger">
                                {{ $errors->first('role')}}
                            </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/login" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
<!-- /.register-box -->

<!-- jQuery -->
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
