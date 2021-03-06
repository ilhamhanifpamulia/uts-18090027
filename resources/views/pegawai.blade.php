<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>UTS 6C D4 Teknik Informatika</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header bg-danger text-center">
                <strong>Aplikasi perekaman data HP </strong> 
                </div>
                <div class="card-body">
                    <a href="/hp/tambah" class="btn btn-primary">Tambah Data Baru</a> <td><a href="/" class="btn btn-danger">Kembali</a></td>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Merk HP</th>
                                <th>Tipe HP</th>
                                <th>Tahun</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->nip }}</td>
                                <td>
                                    <a href="/hp/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/hp/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <center><a href="https://github.com/ilhamhanifpamulia" target="_blank">By 18090027</a></center>
</html>