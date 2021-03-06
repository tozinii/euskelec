@extends('layouts.layoutLogged')
@section('contenido')

<section class="car-list-content">
	<!-- Car data -->
	<div class="sections">
		<h2>Listado de Coches de {{auth()->user()->name}}</h2>
		<table class="table table-hover">
		  <thead>
		    <tr>
					<th scope="col">Nº serie</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Kit</th>
					<th scope="col">Visualizar</th>
		    </tr>
		  </thead>
		  <tbody>
				@foreach($cars as $car)
			    <tr>
				  <td>{{$car->kit->num_serie}}</td>
			      <td>{{$car->code}}</td>
			      <td>{{$car->kit->name}}</td>
			      <td><a href="{{route('cars.show',$car->id)}}" class="btnedit btnedit-outline-info btnedit-size">Info</a></td>
			    </tr>
				@endforeach
		  </tbody>
		</table>
	</div>
	</div>
</section>

@endsection
