@extends('layout.masterpublic')

@section("content")
<h1>CLIENTE</h1>

			<form id="registration_form" action="/storecliente" method="post">
			 {{ csrf_field() }}
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  		<div>
					<label>
						<input placeholder="Nombre" name="nombre" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Apellidos" name="apellidos" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Correo Electronico:" name="email" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Telefono" name="telefono" type="tel" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="usuario:" name="usuario" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Contraseña" name="password" type="password" tabindex="4" required>
					</label>
				</div>	
				<div>
					<input type="submit" value="Crear Cuenta" id="register-submit">
				</div>
				<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
				</div>
			</form>
		
@endsection