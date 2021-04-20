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
                <div class="card-header text-center">
                    CRUD Data Pegawai - <strong>TAMBAH DATA</strong> - <a href="https://kagion.github.io/" target="_blank">By 18090027</a>
                </div>
                <div class="card-body">
                    <a href="/hp" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/hp/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Merk HP</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Merk HP">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tipe HP</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukan Tipe HP"></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tahun produksi</label>
                            <input type="integer" name="nip" class="form-control" placeholder="Masukan Tahun">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
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