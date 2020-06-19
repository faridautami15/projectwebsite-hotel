<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    
    <title>Input Pembayaran</title>
</head>
<body class="body">
<h3 class="text-center"> INPUT PEMBAYARAN </h3>
        <a type="button" class="btn btn-outline-primary" href="/pembayaran/read-pembayaran"> < Kembali</a>
        <form action="/pembayaran/store-pembayaran" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
            <tr>
                <td>ID Pemesanan</td>
                <td><input class="form-control" type="text" name="pemesanan_id" required="required"></td>
            </tr>
			<tr>
                <td>Tanggal Pembayaran</td>
                <td><input class="form-control" type="date" name="tanggal" required="required"></td>
            </tr>
            <tr>
                <td>Total Pembayaran</td>
                <td><input class="form-control" type="number" name="total" required="required"></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>  
</body>
</html>