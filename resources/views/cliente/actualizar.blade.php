@extends('layout.masterpubliclog')

@section("content")

<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>Actualizar datos</h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {

			
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
       @if(session()->has('msj')==1)
		<div class="alert alert-success">
		    <strong>Genial!</strong> La informacion fue actualizada.
		</div>
	   @elseif(session()->has('msj')==0)
			<div class="alert alert-info">
			<strong>Info!</strong> Ya la informacion fue actualizada.
			</div>
	   @endif

		<div >
			@foreach($datos_clientes as $datos)
			<form id="registration_form" action="/cliente/actualizar/{{ $datos->idcliente }}" method="POST">
			 {{ csrf_field() }}
			 <input name="_method" value="PUT" type="hidden">
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  		<div>
					<label>
						<input placeholder="Nombre" name="nombre" type="text" tabindex="2" value="{{ $datos->nombre }}" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Apellidos" name="apellidos" type="text" tabindex="2" value="{{ $datos->apellido }}" required autofocus>
					</label>
				</div>
				<div>
					<label>
					Fecha de Nacimiento: 
						<input name="fecha_nacimiento" type="date" tabindex="3" value="{{ $datos->fecha_nacimiento }}" required>
					</label>
				</div>
				<div>
				<div class="sky_form1">
							<ul>
								<label>Sexo</label>
								@if($datos->sexo=='m')
								<li><label class="radio left"><input type="radio" name="sexo" checked="" id="checkempresa" value="m"><i></i>Masculino</label></li>
								<li><label class="radio"><input type="radio" name="sexo" id="checkcliente"  value="f"><i></i>Femenino</label></li>

								@else
								<li><label class="radio left"><input type="radio" name="sexo"  id="checkempresa" value="m"><i></i>Masculino</label></li>
								<li><label class="radio"><input type="radio" name="sexo" id="checkcliente" checked="" value="f"><i></i>Femenino</label></li>

								@endif
								<div class="clearfix"></div>
							</ul>
						</div>
				</div>
				<div>
					<label>
						<input placeholder="Telefono" name="telefono" type="tel" tabindex="2" value="{{ $datos->telefono }}"required autofocus>
					</label>
				</div>			
				
				<div>
					<input type="submit" value="Actualizar datos" id="register-submit">
				</div>
				
			</form>
			@endforeach
		</div>

		</div>
	</div>
	
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
		
@endsection