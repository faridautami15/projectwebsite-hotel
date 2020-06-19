<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    
    <title>Input Petugas</title>
</head>
<body class="body">
<h3 class="text-center">INPUT PETUGAS</h3>
        <a type="button" class="btn btn-outline-primary" href="/petugas/read-petugas">< Kembali</a>
        <form action="/petugas/store-petugas" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
			<tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat" required="required"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="1" required="required"> Laki-Laki<br>
                    <input type="radio" name="jk" value="0" required="required"> Perempuan<br>
                </td>     
            </tr>
            <tr>
                <td>Nomer Telepon</td>
                <td><input class="form-control" type="text" name="notelp" required="required"></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>
</body>
</html>