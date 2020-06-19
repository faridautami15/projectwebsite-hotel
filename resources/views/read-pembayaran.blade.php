<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Read Pembayaran</title>
</head>
<body class="body">
<h3 class="text-center">DATA PEMBAYARAN</h3>
<br/>
        <td>
            <a type="button" class="btn btn-outline-info" href="/dashboar-petugas"> < Home</a>
            <a type="button" class="btn btn-outline-info" href="/pembayaran/input-pembayaran"> + Tambah Data</a>
            <a type="button" class="btn btn-outline-info" href="/pembayaran/cetak_pdf"> Cetak</a>
        </td>
        <br/>

        <br/>
        <table  class="table table-hover">   
            <thead>         
                <tr>
                    <th class="text-center" scope="col">ID Pembayaran</th>
                    <th class="text-center" scope="col">ID Pemesanan</th>
                    <th class="text-center" scope="col">Tanggal Pembayaran</th>
                    <th class="text-center" scope="col">Total Pembayaran</th>
                    <th class="text-center" scope="col">Opsi</th>
                </tr>
            </thead>
            @foreach($pembayaran as $p)
                <tr>
                    <td class="text-center">{{ $p->PEMBAYARAN_ID }}</td>
                    <td class="text-center">{{ $p->PEMESANAN_ID}}</td>
                    <td class="text-center">{{ $p->PEMBAYARAN_TANGGAL }}</td>
                    <td class="text-center">{{ $p->PEMBAYARAN_TOTAL}}</td>
                    <td class="text-center">
                        <a type="button" class="btn btn-warning" href="/pembayaran/edit-pembayaran/{{ $p->PEMBAYARAN_ID }}">Edit</a>
                        <a type="button" class="btn btn-danger" href="/pembayaran/delete-pembayaran/{{ $p->PEMBAYARAN_ID}}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table> 
</body>
</html>