<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Edit Pemesanan</title>
</head>
<body class="body">
<h3 class="text-center">EDIT PEMESANAN</h3>
        <a type="button" class="btn btn-outline-warning" href="/pemesanan/read-pemesanan"> Kembali</a>
    
        @foreach ($pemesanan as $p)
        <form action="/pemesanan/update-pemesanan" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
            <tr>
            <td><input type="hidden" name="id" value="{{ $p->PEMESANAN_ID }}"></td>
            </tr>
            <tr>
                <td>
                <label for="1">Nama Pelanggan</label>
                <select class="form-control" name="PELANGGAN_ID" id="1">
                    @foreach ($pemesanan as $p)
                        <option value="{{$p -> PELANGGAN_ID}}">{{$p -> PELANGGAN_NAMA}}</option>
                    @endforeach
                </select>
                </td>
            </tr>
            <tr>
                <td>
                <label for="1">Nama Petugas</label>
                <select class="form-control" name="PETUGAS_ID" id="1">
                    @foreach ($pemesanan as $p)
                        <option value="{{$p -> PETUGAS_ID}}">{{$p -> PETUGAS_NAMA}}</option>
                    @endforeach
                </select>
                </td>
            </tr>
            <tr>
                <td>
                <label for="1">Jenis Kamar</label>
                <select class="form-control" name="KAMAR_ID" id="1">
                    @foreach ($pemesanan as $p)
                        <option value="{{$p -> KAMAR_ID}}">{{$p -> KAMAR_JENIS}}</option>
                    @endforeach
                </select>
                </td>
            </tr>
            <tr>
                <td>Check In</td>
                <td><input class="form-control" type="date" name="checkin" value="{{$p->PEMESANAN_CHECKIN}}"></td>
            </tr>
            <tr>
                <td>Check Out</td>
                <td><input class="form-control" type="date" name="checkout" value="{{$p->PEMESANAN_CHECKOUT}}"></td>
            </tr>
            <tr>
                <td><input class="btn btn-warning mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>
        @endforeach
</body>
</html>