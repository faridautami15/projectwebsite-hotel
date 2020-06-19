<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Input Pemesanan</title>
</head>
<body class="body">
<h3 class="text-center">INPUT PEMESANAN</h3>
        <a type="button" class="btn btn-outline-primary" href="/pemesanan/read-pemesanan"> Kembali</a>
        <form action="/pemesanan/store-pemesanan" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
            <tr>
                <label for=" ">Nama Pelanggan</label>
                <select class="form-control" name="PELANGGAN_ID" id=" ">
                    @foreach ($pemesanan as $p)
                        <option value="{{$p -> PELANGGAN_ID}}">{{$p -> PELANGGAN_NAMA}}</option>
                    @endforeach
                </select>
            </tr>
            <tr> 
                <td>
                <label for=" ">Nama Petugas</label>
                <select class="form-control" name="PETUGAS_ID" id=" ">
                    @foreach ($pemesanan as $p)
                        <option value="{{$p -> PETUGAS_ID}}">{{$p -> PETUGAS_NAMA}}</option>
                    @endforeach
                </select>
                </td>
            </tr>
            <tr>
                <td>
                <label for=" ">Jenis Kamar</label>
                <select class="form-control" name="KAMAR_ID" id=" ">
                    @foreach ($pemesanan as $p)
                        <option value="{{$p -> KAMAR_ID}}">{{$p -> KAMAR_JENIS}}</option>
                    @endforeach
                </select>
                </td>
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
                <td><input  class="btn btn-primary mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>

</body>
</html>