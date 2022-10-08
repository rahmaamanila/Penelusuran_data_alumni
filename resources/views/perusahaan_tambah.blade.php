<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Perusahaan</title>
</head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Tambah Lowongan 
                </div> -->
                <div class="card-body">
                    <a href="/perusahaan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/perusahaan/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="text" name="nm_perusahaan" class="form-control" placeholder="Nama Perusahaan">
 
                            @if($errors->has('nm_perusahaan'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_perusahaan')}}
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