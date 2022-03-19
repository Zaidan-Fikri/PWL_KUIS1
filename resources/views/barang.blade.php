@extends('layout.master')

@section('content')
<br><br>
<section>
	<div class="container tm-position-relative">
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Gambar</th>
						<th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Harga</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($barang as $a)
					<tr>
						<td>{{$a ->id}}</td>
						<td><img src="{{$a ->gambar}}" style= "width: 100px; height: 100px"></td>
						<td>{{$a ->nama_barang}}</td>
                        <td>{{$a ->jumlah_barang}}</ td>
                        <td>{{$a ->harga}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="d-flex">
			{{ $barang->links() }}
		</div>
	</div>	
</section>		

@endsection