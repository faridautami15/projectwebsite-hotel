<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Edit Pembayaran</title>
</head>
<body class="body">
<h3 class="text-center">EDIT PEMBAYARAN</h3>
        <a type="button" class="btn btn-outline-warning" href="/pembayaran/read-pembayaran"> Kembali</a>
    
        @foreach ($pembayaran as $p)
        <form action="/pembayaran/update-pembayaran" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
            <tr>
            <td><input type="hidden" name="id" value="{{ $p->PEMBAYARAN_ID }}"></td>
            </tr>
            <tr>
                <td>ID Pemesanan</td>
                <td><input class="form-control" type="text" name="pemesanan_id" value="{{$p->PEMESANAN_ID}}"></td>
            </tr>
			<tr>
                <td>Tanggal Pembayaran</td>
                <td><input class="form-control" type="date" name="tanggal" value="{{$p->PEMBAYARAN_TANGGAL}}"></td>
            </tr>
            <tr>
                <td>Total Pembayaran</td>
                <td><input class="form-control" type="text" name="total" value="{{$p->PEMBAYARAN_TOTAL}}"></td>   
            </tr>
            <tr>
                <td><input class="btn btn-warning mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>
        @endforeach
</body>
</html>