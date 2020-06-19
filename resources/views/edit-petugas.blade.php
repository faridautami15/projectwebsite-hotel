<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Edit Petugas</title>
</head>
<body class="body">
<h3 class="text-center">EDIT PETUGAS</h3>
        <a type="button" class="btn btn-outline-warning" href="/petugas/read-petugas"> Kembali</a>
    
        @foreach ($petugas as $p)
        <form action="/petugas/update-petugas" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
            <tr>
            <td><input type="hidden" name="id" value="{{ $p->PETUGAS_ID }}"></td>
            </tr>
			<tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" value="{{$p->PETUGAS_NAMA}}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat" value="{{$p->PETUGAS_ALAMAT}}"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="{{$p->PETUGAS_JK}}"> Laki-Laki<br>
                    <input type="radio" name="jk" value="{{$p->PETUGAS_JK}}"> Perempuan<br>
                </td>     
            </tr>
            <tr>
                <td>Nomer Telepon</td>
                <td><input class="form-control" type="text" name="notelp" value="{{$p->PETUGAS_NOTELP}}"></td>
            </tr>
            <tr>
                <td><input class="btn btn-warning mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>
        @endforeach
</body>
</html>