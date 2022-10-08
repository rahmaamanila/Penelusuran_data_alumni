<!DOCTYPE html>
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
                                    <strong>Pembuat :</strong>
                                    {{ $lowongan->nik }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Judul :</strong>
                                    {{ $lowongan->judul }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gambar :</strong>
                                    {{ $lowongan->foto }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan :</strong>
                                    {{ $lowongan->keterangan }}
                                </div>
                            </div>
                        </div>
                        <br/>
                        <a href="/event" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>