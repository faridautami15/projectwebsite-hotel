<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laporan Pemesanan</title>
</head>
<body>
        <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
        <center>
        <h3>LAPORAN PEMESANAN</h3>
        </center> 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th class="text-center" scope="col">ID Pemesanan</th>
                    <th class="text-center" scope="col">ID Pelanggan</th>
                    <th class="text-center" scope="col">ID Petugas</th>
                    <th class="text-center" scope="col">ID Kamar</th>
                    <th class="text-center" scope="col">Check In</th>
                    <th class="text-center" scope="col">Check Out</th>
                    <th class="text-center" scope="col">Opsi</th>    
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pemesanan as $p)
			<tr>
                    <td class="text-center">{{ $p->PEMESANAN_ID }}</td>
                    <td class="text-center">{{ $p->PELANGGAN_ID }}</td>
                    <td class="text-center">{{ $p->PETUGAS_ID }}</td>
                    <td class="text-center">{{ $p->KAMAR_ID}}</td>
                    <td class="text-center">{{ $p->PEMESANAN_CHECKIN}}</td>
                    <td class="text-center">{{ $p->PEMESANAN_CHECKOUT}}</td> 
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>