@extends("layout.master")

@section("content")
   <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Registrar Administrador</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
        <form class="form-horizontal  form-label-left" method="post" action="{{ route('admin_reg_cliente.store') }}" novalidate>

			 {{ csrf_field() }}
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="item form-group">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="nombre" id="nombre" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  placeholder="" required="required" type="text">
                        </div>
                 </div>
                <div class="item form-group">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellido</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="apellido" id="apellido" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  placeholder="" required="required" type="text">
                        </div>
                 </div>

                  <div class="item form-group">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="email" id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  placeholder="" required="required" type="email">
                        </div>
                 </div>
                  <div class="item form-group">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Telefono<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="telefono" id="telefono" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  placeholder="" required="required" type="tel">
                        </div>
                 </div>
                  <div class="item form-group">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Usuario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="usuario" id="usuario" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  placeholder="" required="required" type="text">
                        </div>
                 </div>
                  <div class="item form-group">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contraseña<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="password" type="password" id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  placeholder="" required="required" type="text">
                        </div>
                 </div>
                
                 <div class="item form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Repetir Contraseña</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                   <div class="item form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
		  		
				
		 </form>
                  </div>
                </div>
              </div>
            </div>
@endsection