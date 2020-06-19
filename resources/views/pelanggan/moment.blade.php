@extends('layouts.template-room')
@section('title') The Moment @endsection

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>The Moment</h2>
                        <div class="bt-option">
                            <a href="/hoteldelluna/home-pelanggan">Home</a>
                            <span>Moment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/proses-upload/moment/" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>Photos</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Stories</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				
				<h4 class="my-5">Library of Memories</h4>
 
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="30%"><center>Photos</center></th>
							<th><center>Stories</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="300px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->keterangan}}</td>
							<!--<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">Download</a></td>-->
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>