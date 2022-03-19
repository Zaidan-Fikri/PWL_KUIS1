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
						<th scope="col">Nama</th>
						<th scope="col">Jenis Kelamin</th>
                        <th scope="col">No. HP</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pegawai as $a)
					<tr>
						<td>{{$a ->id}}</td>
						<td>{{$a ->nama}}</td>
						<td>{{$a ->jenis_kelamin}}</td>
                        <td>{{$a ->no_hp}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>	
</section>		

@endsection