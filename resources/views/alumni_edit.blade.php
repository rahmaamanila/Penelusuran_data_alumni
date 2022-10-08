<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit alumni</title>
</head>
    <body>
    <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Edit Data Alumni
                </div> -->
                <div class="card-body">
                    <a href="/alumni" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/alumni/update/{{ $alumni->nik }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nik</label>
                            <input type="text" name="nik" class="form-control" placeholder="nik alumni .." value=" {{ $alumni->nik }}">
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="nama alumni .." value=" {{ $alumni->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tmpt_lahir" class="form-control" placeholder="" value=" {{ $alumni->tmpt_lahir }}">
 
                            @if($errors->has('tmpt_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tmpt_lahir')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="" value=" {{ $alumni->tgl_lahir }}">
 
                            @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                                <input type="radio" name="jenkel" value="laki-laki" checked>Laki-laki
                                <input type="radio" name="jenkel" value="perempuan">Perempuan
 
                             @if($errors->has('jenkel'))
                                <div class="text-danger">
                                    {{ $errors->first('jenkel')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                                <select class="form-control" name="agama">
                                <option selected>Pilih agama</option>
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
                            <input type="text" name="no_telp" class="form-control" placeholder="" value=" {{ $alumni->no_telp }}">
 
                            @if($errors->has('no_telp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telp')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="alamat alumni .."> {{ $alumni->alamat }} </textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <input type="text" name="thn_lulus" class="form-control" placeholder="thn_lulus alumni .." value=" {{ $alumni->thn_lulus }}">
 
                            @if($errors->has('thn_lulus'))
                                <div class="text-danger">
                                    {{ $errors->first('thn_lulus')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email alumni .." value=" {{ $alumni->email }}">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password alumni .." value=" {{ $alumni->password }}">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                                <select class="form-control" name="status">
                                <option selected>Pilih Status</option>
                                <option value="bekerja">Bekerja</option>
                                <option value="belumbekerja">Belum Bekerja</option>		
                                </select>
 
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Perusahaan</label>
                                <select class="form-control" name="id_perusahaan">
                                <option selected>Pilih Perusahaan</option>
                                <option value="1">1</option>
                                <option value="2">2</option>		
                                </select>
 
                             @if($errors->has('id_perusahaan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_perusahaan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                                <select class="form-control" name="id_jabatan">
                                <option selected></option>
                                @foreach($perusahaan as $p)
                                <option value="1">1</option>
                                @endforeach		
                                </select>
 
                             @if($errors->has('id_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jabatan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Masuk Kerja</label>
                            <input type="date" name="tgl_masuk" class="form-control" placeholder="">
 
                             @if($errors->has('tgl_masuk'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_masuk')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Masuk Sebagai</label>
                                <select class="form-control" name="role">
                                <option selected></option>
                                <option value="admin">Admin</option>
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
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>