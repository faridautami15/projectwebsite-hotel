<!DOCTYPE html>
<html>
<head>
     <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Read Kamar</title>
</head>
<body class="body">
    <h3 class="text-center">DATA KAMAR</h3>
    <br/>

        <td>
            <a type="button" class="btn btn-outline-info" href="/dashboar-petugas"> < Home</a>
            <a type="button" class="btn btn-outline-info" href="/kamar/input-kamar"> + Tambah Data</a>
            <a type="button" class="btn btn-outline-info" href="/kamar/cetak_pdf"> Cetak</a>
        </td>
        <br/>

        <br/>
        <table class="table table-hover">  
            <thead>       
                <tr>
                    <th class="text-center" scope="col">ID Kamar</th>
                    <th class="text-center" scope="col">Jenis Kamar</th>
                    <th class="text-center" scope="col">Deskripsi Kamar</th>
                    <th class="text-center" scope="col">Harga Kamar</th>
                    <th class="text-center" scope="col">Opsi</th>
                </tr>
            </thead>
            @foreach($kamar as $p)
                <tr>
                    <td class="text-center">{{ $p->KAMAR_ID }}</td>
                    <td class="text-center">{{ $p->KAMAR_JENIS }}</td>
                    <td class="text-center">{{ $p->KAMAR_DESKRIPSI }}</td>
                    <td class="text-center">{{ $p->KAMAR_HARGA }}</td>
                    <td class="text-center">
                    <a type="button" class="btn btn-warning" href="/kamar/edit-kamar/{{ $p->KAMAR_ID }}">Edit</a>
                    <a type="button" class="btn btn-danger" href="/kamar/delete-kamar/{{ $p->KAMAR_ID }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
</body>
</html>