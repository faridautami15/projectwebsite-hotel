<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Input Kamar</title>
</head>
<body class="body">
<h3 class="text-center"> INPUT KAMAR </h3>
        <a type="button" class="btn btn-outline-primary" href="/pembayaran/read-pembayaran" href="/kamar/read-kamar"> < Kembali</a>
        <form action="/kamar/store-kamar" method="post">
        {{ csrf_field() }}

            <tr>
			<td><table width="400">
            </tr>

            <div>
            <br/>
                <label for="">Jenis</label>
                <select class="form-control" name="KAMAR_JENIS" id="">
                    <option value="Single Room">Single Room</option>
                    <option value="Twin Room">Twin Room</option>
                    <option value="Triple Room">Triple Room</option>
                    <option value="Standart Room">Standart Room</option>
                    <option value="Superior Room">Superior Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                </select></br>
            </div>

            <td><input class="btn btn-secondary mb-2" type="submit" name= "Simpan" value="next"></td>
        </form>
</body>
</html>