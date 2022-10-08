<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Jabatan</title>
</head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Jabatan
                </div>
                <br> -->
                <div class="card-body">
                    <a href="/jabatan/tambah" class="btn btn-primary">Tambah Jabatan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jabatan as $i => $p)
                            <tr>
                                <td>{{ $p->$i+1 }}</td>
                                <td>{{ $p->nm_jabatan }}</td>
                             <td>
                                    <a href="/jabatan/delete/{{ $p->id_jabatan }}" class="btn btn-danger">hapus</a>
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
