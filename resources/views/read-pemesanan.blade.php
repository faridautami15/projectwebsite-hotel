<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Read Pemesanan</title>
</head>
<body class="body">
<h3 class="text-center">DATA PEMESANAN</h3>
<br/>
        <td>
            <a type="button" class="btn btn-outline-info" href="/dashboar-petugas"> < Home</a>
            <a type="button" class="btn btn-outline-info" href="/pemesanan/input-pemesanan"> + Tambah Data</a>
            <a type="button" class="btn btn-outline-info" href="/pemesanan/cetak_pdf"> Cetak</a>
        </td>
        <br/>

        <br/>
        <table  class="table table-hover"> 
            <thead>           
                <tr>
                    <th class="text-center" scope="col">ID Pemesanan</th>
                    <th class="text-center" scope="col">ID Pelanggan</th>
                    <th class="text-center" scope="col">ID Petugas</th>
                    <th class="text-center" scope="col">ID Kamar</th>
                    <th class="text-center" scope="col">Check In</th>
                    <th class="text-center" scope="col">Check Out</th>
                    <th class="text-center" scope="col">Opsi</th>
                </tr>
            </thead>
            @foreach($pemesanan as $p)
                <tr>
                    <td class="text-center">{{ $p->PEMESANAN_ID }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_ID }}</td>
                    <td class="text-center">{{ $p->PETUGAS_ID }}</td>
                    <td class="text-center">{{ $p->KAMAR_ID}}</td>
                    <td class="text-center">{{ $p->PEMESANAN_CHECKIN}}</td>
                    <td class="text-center">{{ $p->PEMESANAN_CHECKOUT}}</td>
                    <td class="text-center">
                        <a type="button" class="btn btn-warning" href="/pemesanan/edit-pemesanan/{{ $p->PEMESANAN_ID }}">Edit</a>
                        <a type="button" class="btn btn-danger" href="/pemesanan/delete-pemesanan/{{ $p->PEMESANAN_ID }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table> 


</body>
</html>