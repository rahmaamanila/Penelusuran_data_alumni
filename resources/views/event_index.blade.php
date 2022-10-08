<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Event</title>
</head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Lowongan Pekerjaan
                </div>
                <br> -->
                <div class="card-body">
                    <a href="/event/tambah" class="btn btn-primary">Tambah Kegiatan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($event as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nm_event }}</td>
                                <td>{{ $p->awal_event }}</td>
                                <td>{{ $p->selesai_event }}</td>
                             <td>
                                    <a href="/event/edit/{{ $p->id_event }}" class="btn btn-success">Edit</a>
                                    <a href="/event/detail/{{ $p->id_event }}" class="btn btn-warning">detail</a>
                                    <a href="/event/delete/{{ $p->id_event }}" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>