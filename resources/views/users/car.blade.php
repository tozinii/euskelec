@extends('layouts.layoutLogged')
@section('contenido')
<section class="profile-content">
		<div class="sections">
			<div id="contenido">
			    <div id="sensores">
			    	<h2>{{ucfirst($car->code)}}</h2>
			    	<input type="hidden" id="idCoche" value="{{$car->id}}">

				    <div id="lista-sensores">
				    	<h3>{{ucfirst($car->kit->name)}}</h3>
						@foreach($car->kit->sensors as $sensor)
						    <div id="sensores-listados">
						      	<label>{{ ucfirst($sensor->name) }}</label>
						      	<div id="{{$sensor->id}}"></div>
							</div>
						@endforeach
					</div>
				</div>
				<div class="clear">
					<div id="imagen-coche">
						<img src="{{asset($car->kit->image)}}">
					</div>
				</div>
			</div>
	  </div>
	</div>
</section>
<script type="text/javascript">
$(document).ready(function () {
	var car_id = document.getElementById("idCoche").value;

	  	$.ajax({
		  url: '/api/lastdata/'+car_id,
		  type: "GET",
		  dataType: 'json',
		  success: function(data) {
			  	var newRow1 = "<input type='text' id='valor' value="+data[0].data+" disabled>"
			  	var newRow2 = "<input type='text' id='valor' value="+data[1].data+" disabled>"
			  	var newRow3 = "<input type='text' id='valor' value="+data[2].data+" disabled>"
			  	var newRow4 = "<input type='text' id='valor' value="+data[3].data+" disabled>"
			  	var newRow5 = "<input type='text' id='valor' value="+data[4].data+" disabled>"
			  	var newRow6 = "<input type='text' id='valor' value="+data[5].data+" disabled>"
			  	var newRow7 = "<input type='text' id='valor' value="+data[6].data+" disabled>"
			  	var newRow8 = "<input type='text' id='valor' value="+data[7].data+" disabled>"
			  	var newRow9 = "<input type='text' id='valor' value="+data[8].data+" disabled>"
			  	var newRow10 = "<input type='text' id='valor' value="+data[9].data+" disabled>"
			  	var newRow11 = "<input type='text' id='valor' value="+data[10].data+" disabled>"
			  	var newRow12 = "<input type='text' id='valor' value="+data[11].data+" disabled>"

			
			  	$(newRow1).appendTo("#1");
			  	$(newRow2).appendTo("#2");
			  	$(newRow3).appendTo("#3");
			  	$(newRow4).appendTo("#4");
			  	$(newRow5).appendTo("#5");
			  	$(newRow6).appendTo("#6");
			  	$(newRow7).appendTo("#7");
			  	$(newRow8).appendTo("#8");
			  	$(newRow9).appendTo("#9");
			  	$(newRow10).appendTo("#10");
			  	$(newRow11).appendTo("#11");
			  	$(newRow12).appendTo("#12");
	       }

		});
});
</script>
@endsection

