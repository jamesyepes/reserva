@extends("layout.master")

@section("content")

  <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Registrar Establecimiento <small>sub title</small></h2>
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

                    <form class="form-horizontal  form-label-left" method="post" action="{{ route('establecimientos.store') }}" novalidate>
                      {{ csrf_field() }}
                      <div class="item form-group">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Empresa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="empresa" id="empresa" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  placeholder="" required="required" type="text">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Representante Legal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="representante" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"   placeholder="" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Documento<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="documento" class="form-control col-md-7 col-xs-12" data-validate-length-range="4"   placeholder="" required="required" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Establecimeinto</label>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                          <select name="tipo" class="select2_group form-control">
                          <!-- tipo de establecimienro -->
                           <option value=""></option>
                          @foreach($datos as $tipo_estab)
                              <option value="{{ $tipo_estab->idtipo_empresa }}">{{ $tipo_estab->tipo }}</option>
                          @endforeach    
                              
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="telefono"   class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                                           
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" id="website" name="website" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Usuario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="usuario" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"   placeholder="Razon Social" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password"  class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
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