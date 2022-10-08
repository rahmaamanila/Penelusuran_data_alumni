<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Alumni</title>
</head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    alumni
                </div>
                <br> -->
                <div class="card-body">
                    <a href="/alumni/tambah" class="btn btn-primary">Tambah Alumni</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahun Lulus</th>
                                <th>Status</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumni as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->jenkel }}</td>
                                <td>{{ $p->thn_lulus }}</td>
                                <td>{{ $p->status }}</td>
                             <td>
                                    <a href="/alumni/edit/{{ $p->nik }}" class="btn btn-success">Edit</a>
                                    <a href="/alumni/detail/{{ $p->nik }}" class="btn btn-warning">detail</a>
                                    <a href="/alumni/delete/{{ $p->nik }}" class="btn btn-danger">hapus</a>
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