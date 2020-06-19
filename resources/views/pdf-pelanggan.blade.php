<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laporan Pelanggan</title>
</head>
<body>
        <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
        <center>
        <h3>LAPORAN PELANGGAN</h3>
        </center> 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th class="text-center" scope="col">ID Pelanggan</th>
                    <th class="text-center" scope="col">No. KTP</th>
                    <th class="text-center" scope="col">Nama Pelanggan</th>
                    <th class="text-center" scope="col">Alamat</th>
                    <th class="text-center" scope="col">Jenis Kelamin</th>
                    <th class="text-center" scope="col">Alamat Email</th>
                    <th class="text-center" scope="col">No. Telepon</th>
                    <th class="text-center" scope="col">Jenis Kamar</th>
                    <th class="text-center" scope="col">CheckIn</th>
                    <th class="text-center" scope="col">CheckOut</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pelanggan as $p)
			<tr>
                    <td class="text-center">{{ $p->PELANGGAN_ID }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_NOKTP }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_NAMA }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_ALAMAT }}</td>
                    @if($p -> PELANGGAN_JK == 0)
                            <td>Perempuan</td>
                    @else($p -> PELANGGAN_JK == 1)
                            <td>Laki-Laki</td>
                    @endif
                    <td class="text-center">{{ $p->PELANGGAN_EMAIL}}</td>
                    <td class="text-center">{{ $p->PELANGGAN_NOTELP }}</td>
                    <td class="text-center">{{ $p->JENISKAMAR}}</td>
                    <td class="text-center">{{ $p->CHECK_IN}}</td>
                    <td class="text-center">{{ $p->CHECK_OUT}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>