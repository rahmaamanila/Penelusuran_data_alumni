<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Lowongan</title>
</head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Lowongan Pekerjaan
                </div>
                <br> -->
                <div class="card-body">
                    <a href="/lowongan/tambah" class="btn btn-primary">Tambah data</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lowongan as $p)
                            <tr>
                                <td>{{ $p->judul }}</td>
                                <td>{{ $p->foto }}</td>
                             <td>
                                    <a href="/lowongan/edit/{{ $p->id_lowongan }}" class="btn btn-success">Edit</a>
                                    <a href="/lowongan/detail/{{ $p->id_lowongan }}" class="btn btn-warning">detail</a>
                                    <a href="/lowongan/delete/{{ $p->id_lowongan }}" class="btn btn-danger">hapus</a>
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