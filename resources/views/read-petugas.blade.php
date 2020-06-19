<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <title>Read Petugas</title>
</head>
<body class="body">
    <h3 class="text-center">DATA PETUGAS</h3>
    <br/>
        <td>
            <a type="button" class="btn btn-outline-info" href="/dashboar-petugas"> < Home</a>
            <a type="button" class="btn btn-outline-info" href="/petugas/input-petugas"> + Tambah Data</a>
            <a type="button" class="btn btn-outline-info" href="/petugas/cetak_pdf"> Cetak</a>
            <div class="form-group"></div>
			    <form  action="/petugas/cari-petugas" method="GET" class="form-inline">
				    <input class="form-control" type="text" name="cari" placeholder="Cari Petugas .." value="{{ old('cari') }}">
				    <input class="btn btn-info ml-3" type="submit" value="CARI">
			    </form>
        </td>

        <br/>
        <table class="table table-hover">   
            <thead>         
                <tr>
                    <th class="text-center" scope="col">ID Petugas</th>
                    <th class="text-center" scope="col">Nama Petugas</th>
                    <th class="text-center" scope="col">Alamat</th>
                    <th class="text-center" scope="col">Jenis Kelamin</th>
                    <th class="text-center" scope="col">No Telepon</th>  
                    <th class="text-center" scope="col">Opsi</th>  
                </tr>
            </thead>
            @foreach($petugas as $p)
                <tr>
                    <td class="text-center">{{ $p->PETUGAS_ID}}</td>
                    <td class="text-center">{{ $p->PETUGAS_NAMA }}</td>
                    <td class="text-center">{{ $p->PETUGAS_ALAMAT }}</td>
                        @if($p -> PETUGAS_JK == 0)
                            <td>Perempuan</td>
                        @else($p -> PETUGAS_JK == 1)
                            <td>Laki-Laki</td>
                        @endif
                    <td class="text-center">{{ $p->PETUGAS_NOTELP }}</td>
                    <td class="text-center">
                        <a type="button" class="btn btn-warning" href="/petugas/edit-petugas/{{ $p->PETUGAS_ID }}">Edit</a>
                        <a type="button" class="btn btn-danger" href="/petugas/delete-petugas/{{ $p->PETUGAS_ID }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table> 
</body>
</html>