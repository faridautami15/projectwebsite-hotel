<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Edit Pelanggan</title>
</head>
<body class="body">
<h3 class="text-center">EDIT PELANGGAN</h3>
        <a type="button" class="btn btn-outline-warning" href="/pelanggan/read-pelanggan"> Kembali</a>
    
        @foreach ($pelanggan as $p)
        <form action="/pelanggan/update-pelanggan" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    <tr>
            <tr>
            <td><input type="hidden" name="id" value="{{ $p->PELANGGAN_ID }}"></td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td><input class="form-control" type="text" name="noktp" value="{{$p->PELANGGAN_NOKTP}}"></td>
            </tr>
			<tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" value="{{$p->PELANGGAN_NAMA}}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat" value="{{$p->PELANGGAN_ALAMAT}}"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="{{$p->PELANGGAN_JK}}"> Laki-Laki<br>
                    <input type="radio" name="jk" value="{{$p->PELANGGAN_JK}}"> Perempuan<br>
                </td>     
            </tr>
            <tr>
                <td>Alamat Email</td>
                <td><input class="form-control" type="text" name="email" value="{{$p->PELANGGAN_EMAIL}}"></td>
            </tr>
            <tr>
                <td>Nomer Telepon</td>
                <td><input class="form-control" type="text" name="notelp" value="{{$p->PELANGGAN_NOTELP}}"></td>
            </tr>
            <tr>
                <td>Kamar Jenis</td>
                <td><input class="form-control" type="text" name="kamar" value="{{$p->JENISKAMAR}}"></td>
            </tr>
            <tr>
                <td>Check In</td>
                <td><input class="form-control" type="date" name="checkin" value="{{$p->CHECK_IN}}"></td>
            </tr>
            <tr>
                <td>Check Out</td>
                <td><input class="form-control" type="date" name="checkout" value="{{$p->CHECK_OUT}}"></td>
            </tr>
            <tr>
                <td><input class="btn btn-warning mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>
        @endforeach
</body>
</html>