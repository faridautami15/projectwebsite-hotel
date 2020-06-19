<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    
    <title>Read Pelanggan</title>
</head>
<body class="body">
<h3 class="text-center">DATA PELANGGAN</h3>
<br/>
        <td>
            <a type="button" class="btn btn-outline-info" href="/dashboar-petugas"> < Home</a>
            <a type="button" class="btn btn-outline-info" href="/pelanggan/cetak_pdf"> Cetak</a>
            <div class="form-group"></div>
			    <form action="/pelanggan/cari-pelanggan" method="GET" class="form-inline">
				    <input class="form-control" type="text" name="cari" placeholder="Cari Pelanggan .." value="{{ old('cari') }}">
				    <input class="btn btn-info ml-3" type="submit" value="CARI">
			    </form>
            <div class="form-group"></div>
			    <form action="/pelanggan/cari-reservasi" method="GET" class="form-inline">
				    <input class="form-control" type="date" name="cari" placeholder="Cari Tanggal Pemesanan .." value="{{ old('cari') }}">
				    <input class="btn btn-info ml-3" type="submit" value="CARI">
			    </form>
        </td>

        <br/>
        <table class="table table-hover">   
            <thead>         
                <tr>
                    <th class="text-center" scope="col">ID Pelanggan</th>
                    <th class="text-center" scope="col">No. KTP</th>
                    <th class="text-center" scope="col">Nama Pelanggan</th>
                    <th class="text-center" scope="col">Alamat</th>
                    <th class="text-center" scope="col">Jenis Kelamin</th>
                    <th class="text-center" scope="col">Alamat Email</th>
                    <th class="text-center" scope="col">No. Telepon</th>
                    <th class="text-center" scope="col">Jenis Kamar</th>
                    <th class="text-center" scope="col">CheckIn</th>
                    <th class="text-center" scope="col">CheckOut</th>
                    <th class="text-center" scope="col">Opsi</th>  
                </tr>
            </thead>
            @foreach($pelanggan as $p)
                <tr>
                    <td class="text-center">{{ $p->PELANGGAN_ID }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_NOKTP }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_NAMA }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_ALAMAT }}</td>
                    @if($p -> PELANGGAN_JK == 0)
                            <td>Perempuan</td>
                    @else($p -> PELANGGAN_JK == 1)
                            <td>Laki-Laki</td>
                    @endif
                    <td class="text-center">{{ $p->PELANGGAN_EMAIL}}</td>
                    <td class="text-center">{{ $p->PELANGGAN_NOTELP }}</td>
                    <td class="text-center">{{ $p->JENISKAMAR}}</td>
                    <td class="text-center">{{ $p->CHECK_IN}}</td>
                    <td class="text-center">{{ $p->CHECK_OUT}}</td>
                    <td class="text-center">
                        <a type="button" class="btn btn-warning" href="/pelanggan/edit-pelanggan/{{ $p->PELANGGAN_ID }}">Edit</a>
                        <a type="button" class="btn btn-danger" href="/pelanggan/delete-pelanggan/{{ $p->PELANGGAN_ID }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table> 
</body>
</html>