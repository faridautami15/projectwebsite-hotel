<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <title>Edit Kamar</title>
</head>
<body class="body">
<h3 class="text-center">EDIT KAMAR</h3>
        <a href="/kamar/read-kamar"> Kembali</a>
    
        @foreach ($kamar as $p)
        <form action="/kamar/update-kamar" method="post">
        {{ csrf_field() }}
            <tr>
			    <td><table width="400">
		    
            <tr>
                <td><input type="hidden" name="id" value="{{ $p->KAMAR_ID }}"></td>
            </tr>
            <tr>
                <label for="">KAMAR_JENIS : </label>
                <select class="form-control" name="KAMAR_JENIS" id="">
                    @if($p -> KAMAR_JENIS == "Single Room")
                        <option value="Single Room" selected>Single Room</option>
                        <option value="Twin Room">Twin Room</option>
                        <option value="Triple Room">Triple Room</option>
                        <option value="Standart Room">Standart Room</option>
                        <option value="Superior Room">Superior Room</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                    @elseif($p -> KAMAR_JENIS == "Twin Room")
                        <option value="Single Room">Single Room</option>
                        <option value="Twin Room" selected>Twin Room</option>
                        <option value="Triple Room">Triple Room</option>
                        <option value="Standart Room">Standart Room</option>
                        <option value="Superior Room">Superior Room</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                    @elseif($p -> KAMAR_JENIS == "Triple Room")
                        <option value="Single Room">Single Room</option>
                        <option value="Twin Room">Twin Room</option>
                        <option value="Triple Room" selected>Triple Room</option>
                        <option value="Standart Room">Standart Room</option>
                        <option value="Superior Room">Superior Room</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                    @elseif($p -> KAMAR_JENIS == "Standart Room")
                        <option value="Single Room">Single Room</option>
                        <option value="Twin Room">Twin Room</option>
                        <option value="Triple Room">Triple Room</option>
                        <option value="Standart Room" selected>Standart Room</option>
                        <option value="Superior Room">Superior Room</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                    @elseif($p -> KAMAR_JENIS == "Superior Room")
                        <option value="Single Room">Single Room</option>
                        <option value="Twin Room">Twin Room</option>
                        <option value="Triple Room">Triple Room</option>
                        <option value="Standart Room">Standart Room</option>
                        <option value="Superior Room" selecetd>Superior Room</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                    @else($p -> KAMAR_JENIS == "Deluxe Room")
                        <option value="Single Room">Single Room</option>
                        <option value="Twin Room">Twin Room</option>
                        <option value="Triple Room">Triple Room</option>
                        <option value="Standart Room">Standart Room</option>
                        <option value="Superior Room">Superior Room</option>
                        <option value="Deluxe Room" selected>Deluxe Room</option>
                @endif
                </select>
            </tr>
            <tr>
                <td><input class="btn btn-warning mb-2" type="submit" name= "Simpan" value="Simpan"></td>
            </tr>
        </form>
        @endforeach
</body>
</html>