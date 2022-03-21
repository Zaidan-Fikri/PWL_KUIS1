@extends('layout.master')

@section('content')
<br><br>
<section>
	<div class="container tm-position-relative">
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">pemimpin</th>
						<th scope="col">nama_perusahaan</th>
                        <th scope="col">no_perusahaan</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($supplier as $a)
					<tr>
						<td>{{$a ->id}}</td>
						<td>{{$a ->pemimpin}}</td>
						<td>{{$a ->nama_perusahaan}}</td>
                        <td>{{$a ->no_perusahaan}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>	
</section>		

@endsection