<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            table.static {
                position: relative;
                /* left: 3%; */
                border: 1px solid #543554;
            }
        </style>
        <title>Cetak Data Alumni</title>
    </head>
    <body>
        <div class="form-group">
        <h3 align="center"><img src="{{asset('Gambar/logo.png')}}" alt="" class="brand-image img-circle" style="opacity: .9" width="50px" height="50px"><br><b>Data Alumni</b></h3>
            <table class="static" align="center" rules="all" style="width: 95%;">
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Tahun Lulus</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Perusahaan</th>
                    <th>Jabatan</th>
                    <th>Tanggal Masuk</th>
                </tr>
                @foreach ($cetak_alumni as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tmpt_lahir }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->jenkel }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->thn_lulus }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ !empty($item->perusahaan->nm_perusahaan) ? $item->perusahaan->nm_perusahaan : '-'  }}</td>
                    <td>{{ !empty($item->jabatan->nm_jabatan) ? $item->jabatan->nm_jabatan : '-' }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <script type="text/javascript">
            window.print();
        </script>
    </body>
</html>