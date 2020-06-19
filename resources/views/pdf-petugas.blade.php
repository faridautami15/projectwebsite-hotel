<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laporan Petugas</title>
</head>
<body>
        <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
        <center>
        <h3>LAPORAN PETUGAS</h3>
        </center> 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th class="text-center" scope="col">ID Petugas</th>
                    <th class="text-center" scope="col">Nama Petugas</th>
                    <th class="text-center" scope="col">Alamat</th>
                    <th class="text-center" scope="col">Jenis Kelamin</th>
                    <th class="text-center" scope="col">No Telepon</th>    
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($petugas as $p)
			<tr>
                    <td class="text-center">{{ $p->PETUGAS_ID}}</td>
                    <td class="text-center">{{ $p->PETUGAS_NAMA }}</td>
                    <td class="text-center">{{ $p->PETUGAS_ALAMAT }}</td>
                        @if($p -> PETUGAS_JK == 0)
                            <td>Perempuan</td>
                        @else($p -> PETUGAS_JK == 1)
                            <td>Laki-Laki</td>
                        @endif
                    <td class="text-center">{{ $p->PETUGAS_NOTELP }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>