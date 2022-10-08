<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="row">
                        
                            <form method="post" action="/alumni/index">
                            {{ csrf_field() }}

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">{{ csrf_field() }}
                                        <strong>Nik :</strong>
                                        {{ $alumni->nik }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama :</strong>
                                        {{ $alumni->nama }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tempat Lahir :</strong>
                                        {{ $alumni->tmpt_lahir }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal Lahir :</strong>
                                        {{ $alumni->tgl_lahir }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Jenis Kelamin :</strong>
                                        {{ $alumni->jenkel }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Agama :</strong>
                                        {{ $alumni->agama }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>No Telepon :</strong>
                                        {{ $alumni->no_telp }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Alamat :</strong>
                                        {{ $alumni->alamat }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tahun Lulus :</strong>
                                        {{ $alumni->thn_lulus }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email :</strong>
                                        {{ $alumni->email }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Status :</strong>
                                        {{ $alumni->status }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal Masuk :</strong>
                                        {{ $alumni->tgl_masuk }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Role :</strong>
                                        {{ $alumni->role }}
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <a href="/alumni" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> -->


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Detail</title>
    </head>
    <body>
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Detail Alumni
                </div>
                <div class="card-body">
                    <br/>
                   
                        <form method="post" action="/alumni/index">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="nik" class="col-sm-2 col-form-label">Nik</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="nik" value="{{ $alumni->nik }}" disabled>
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="nama" value="{{ $alumni->nama }}" disabled>
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tmpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="tmpt_lahir" value="{{ $alumni->tmpt_lahir }}" disabled>
                                </div>
                            </div>

                             <div class="mb-3 row">
                              <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="tgl_lahir" value="{{ $alumni->tgl_lahir }}" disabled>
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="jenkel" value="{{ $alumni->jenkel }}" disabled>
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                              <label for="id_jabatan" class="col-sm-2 col-form-label">jabatan</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="id_jabatan" value="{{ $alumni->id_jabatan }}" disabled>
                                </div>
                            </div>

                             <!-- <div class="mb-3 row">
                                    <label for="nik" class="col-sm-2 col-form-label">Nik</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="nik" value="{{ $alumni->nik }}" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="nama" value="{{ $alumni->nama }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="jenkel" value="{{ $alumni->jenkel }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="agama" value="{{ $alumni->agama }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="alamat" value="{{ $alumni->alamat }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="thn_lulus" class="col-sm-2 col-form-label">Tahun Lulus</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="thn_lulus" value="{{ $alumni->thn_lulus }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="angkatan" value="{{ $alumni->angkatan }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="status" value="{{ $alumni->status }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="id_perusahaan" class="col-sm-2 col-form-label">Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="id_perusahaan" value="{{ !empty($alumni->id_perusahaan) ? $alumni->perusahaan->nm_perusahaan : '-'  }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="id_jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="id_jabatan" value="{{ !empty($alumni->id_jabatan) ? $alumni->jabatan->nm_jabatan : '-'  }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                    <div class="col-sm-12">
                                        <input type="text"  class="form-control" id="tgl_masuk" value="{{ $alumni->tgl_masuk ?? '-' }}" disabled>
                                    </div>
                                </div> -->
                                <!-- <div class="col-sm-12"> -->
                                <!-- <a href="{{ session('alumni')->role === 'alumni' ? URL::to('alumni/index_alumni') : URL::to('alumni') }}" class="btn btn-primary">Kembali</a> -->
                                <!-- <a href="/alumni/index_alumni" class="btn btn-primary">Kembali</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
