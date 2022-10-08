<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Kegiatan</title>
</head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Edit Data lowongan
                </div> -->
                <div class="card-body">
                    <a href="/event" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/event/update/{{ $event->id_event }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Pembuat</label>
                            <input type="text" name="nik" class="form-control" placeholder="Pembuat event .." value=" {{ $event->nik }}">
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" name="nm_event" class="form-control" placeholder="Nama Kegiatan .." value=" {{ $event->nm_event}}">
 
                            @if($errors->has('nm_event'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_event')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="date" name="awal_event" class="form-control" placeholder="Tanggal Mulai .." value=" {{ $event->awal_event }}">
 
                            @if($errors->has('awal_event'))
                                <div class="text-danger">
                                    {{ $errors->first('awal_event')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="selesai_event" class="form-control" placeholder="Tanggal Selesai .." value=" {{ $event->selesai_event }}">
 
                            @if($errors->has('selesai_event'))
                                <div class="text-danger">
                                    {{ $errors->first('selesai_event')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="keterangan lowongan .."> {{ $event->keterangan }} </textarea>
 
                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
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