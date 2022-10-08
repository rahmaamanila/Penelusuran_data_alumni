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
        <title>Cetak Alumni</title>
    </head>
    <body>
        <div class="form-group">
            <h3 align="center"><img src="{{asset('Gambar/logo.png')}}" alt="" class="brand-image img-circle" style="opacity: .9" width="50px" height="50px"><br><b>Data Event</b></h3>
            <table class="static" align="center" rules="all" style="width: 95%;">
                <tr>
                    <th>No</th>
                    <th>Pembuat</th>
                    <th>Nama Event</th>
                    <th>Mulai Event</th>
                    <th>Selesai Event</th>
                    <th>Keterangan</th>
                </tr>
                @foreach ($cetak_event as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->alumni->nama }}</td>
                    <td>{{ $item->nm_event }}</td>
                    <td>{{ $item->awal_event }}</td>
                    <td>{{ $item->selesai_event }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <script type="text/javascript">
            window.print();
        </script>
    </body>
</html>