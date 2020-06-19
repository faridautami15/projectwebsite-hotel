<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laporan Kamar</title>
</head>
<body>
        <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
        <center>
        <h3>LAPORAN KAMAR</h3>
        </center> 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th class="text-center" scope="col">ID Kamar</th>
                    <th class="text-center" scope="col">Jenis Kamar</th>
                    <th class="text-center" scope="col">Deskripsi Kamar</th>
                    <th class="text-center" scope="col">Harga Kamar</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($kamar as $p)
			<tr>
                    <td class="text-center">{{ $p->KAMAR_ID }}</td>
                    <td class="text-center">{{ $p->KAMAR_JENIS }}</td>
                    <td class="text-center">{{ $p->KAMAR_DESKRIPSI }}</td>
                    <td class="text-center">{{ $p->KAMAR_HARGA }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>