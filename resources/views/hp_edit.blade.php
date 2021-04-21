<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header bg-dark text-center text-white">
                <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/hp" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/hp/update/{{ $pegawai->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


 
                        <div class="form-group">
                            <label>Merk HP</label>
                            <input type="text" name="nama" class="form-control" placeholder="Merk HP .." value=" {{ $pegawai->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tipe HP</label>
                            <textarea name="alamat" class="form-control" placeholder="Tipe HP .."> {{ $pegawai->alamat }} </textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tahun produksi</label>
                            <input type="integer" name="nip" class="form-control" placeholder="Tahun Produksi .." value=" {{ $pegawai->nip }}">
 
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