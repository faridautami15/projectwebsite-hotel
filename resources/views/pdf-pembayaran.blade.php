<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laporan Pembayaran</title>
</head>
<body>
        <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
        <center>
        <h3>LAPORAN PEMBAYARAN</h3>
        </center> 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th class="text-center" scope="col">ID Pembayaran</th>
                    <th class="text-center" scope="col">ID Pemesanan</th>
                    <th class="text-center" scope="col">Tanggal Pembayaran</th>
                    <th class="text-center" scope="col">Total Pembayaran</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pembayaran as $p)
			<tr>
                    <td class="text-center">{{ $p->PEMBAYARAN_ID }}</td>
                    <td class="text-center">{{ $p->PEMESANAN_ID}}</td>
                    <td class="text-center">{{ $p->PEMBAYARAN_TANGGAL }}</td>
                    <td class="text-center">{{ $p->PEMBAYARAN_TOTAL}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>