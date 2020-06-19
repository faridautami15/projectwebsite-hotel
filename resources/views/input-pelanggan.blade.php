<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Input Pelanggan</title>
</head>
<body>
        <form action="/pelanggan/store-pelanggan" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
            <tr>
                <td>Nomor KTP</td>
                <td><input class="form-control" type="text" name="noktp" required="required"></td>
            </tr>
			<tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" required="required"></td>
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
                <td>Alamat Email</td>
                <td><input class="form-control" placeholder="nama@contoh.com"type="text" name="email" required="required"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input class="form-control" type="text" name="notelp" required="required"></td>
            </tr>
            <tr>
                <td>Jenis Kamar</td>
                <td><input class="form-control" type="text" name="kamar" required="required"></td>
            </tr>
            <tr>
                <td>Check In</td>
                <td><input class="form-control" type="date" name="checkin" required="required"></td>
            </tr>
            <tr>
                <td>Check Out</td>
                <td><input class="form-control" type="date" name="checkout" required="required"></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>
    
</body>
</html>