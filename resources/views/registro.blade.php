
@extends('layout.masterpublic')


@section('registrocontent')
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>¿COMO DESEAS REGISTRARTE?<span>  </span></h2>
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

		@include('fragments.error')
		@include('fragments.mensajes')
		 <div class="registration_form">


		 <form>
			<div class="sky-form">
					
						<div class="sky_form1">
							<ul>
								<li><label class="left"><input type="radio" name="opcion" value="checkempresa"  id="checkempresa"><i></i>Como Empresa</label></li>
								<li><label class=""><input type="radio" name="opcion" value="checkcliente" id="checkcliente"><i></i>Como Cliente</label></li>
								<div class="clearfix"></div>
							</ul>
						</div>
			</div>
		 </form>

		 <!-- Form -->
        <div id="formempresa">
			<form id="registration_form" action="/storeempresa" method="post">
			 {{ csrf_field() }}
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div>
					<label>
						<input placeholder="Empresa*" name="empresa" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Nit*" name="nit" type="text" tabindex="1" maxlength="10" required autofocus>
					</label>
				</div>
				<div>
				     <label>
					 		
                          <select name="tipo" class="select2_group form-control">
                          <!-- tipo de establecimienro -->
                           <option value="">Seleccione tipo de Establecimienro*</option>
                          @foreach($datos as $tipo_estab)
                              <option value="{{ $tipo_estab->idtipo_empresa }}">{{ $tipo_estab->tipo }}</option>
                          @endforeach    
                              
                          </select>
                      
					 </label>
				</div>
				<div>
					<label>
						<input placeholder="Representante Legal*" name="representante" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Documento*" name="documento" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Correo Electronico*" name="correo" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Telefono" name="telefono" type="tel" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Sitio Web" name="website" type="text" tabindex="3" >
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Usuario*" name="usuario" type="text" tabindex="3" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Contraseña*" name="pass" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<label>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Contraseña*" name="pass_confirmation" required>
					</label>
				</div>	
				<div>
					<input type="submit" value="Crear Cuenta" id="register-submit">
				</div>
				
			</form>
			<!-- /Form -->
		</div>

		<div id="formcliente">
			<form id="registration_form" action="/storecliente" method="post">
			 {{ csrf_field() }}
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  		<div>
					<label>
						<input placeholder="Nombre*" name="nombre" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Apellidos" name="apellidos" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Correo Electronico*" name="emails" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Telefono" name="telefono" type="tel" tabindex="2" >
					</label>
				</div>
				<div>
					<label>
						<input placeholder="usuario*" name="usu" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Contraseña*" name="passw" type="password" tabindex="4" required>
					</label>
				</div>	

				<div>
					<label>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Contraseña*" name="passw_confirmation" required>
					</label>
				</div>	


				<div>
					<input type="submit" value="Crear Cliente" id="register-submit">
				</div>
			
			</form>
		</div>

		</div>
	</div>
	<!--
	<div class="registration_left">
		<h2>existing user</h2>
		 <div class="registration_form">
		
			<form id="registration_form" action="contact.php" method="post">
				<div>
					<label>
						<input placeholder="email:" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form>
			
			</div>
	</div>-->
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>

@endsection