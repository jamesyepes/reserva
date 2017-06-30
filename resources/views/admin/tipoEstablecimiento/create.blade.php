@extends('layout.master')

@section("content")

<div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar Tipo de Establecimiento <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" role="button" aria-expanded="false" href="#" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
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
                    <form class="form-horizontal form-label-left" method="post" action="{{ route('tipoestablecimiento.store') }}">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <div class="col-sm-10">
                           <div class="input-group">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" class="form-control" name="tipoempresa" placeholder="Tipo de Establecimiento">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </span>
                          </div>
                        </div>
                      </div>                    
                    </form>
                  </div>                  
            </div>
  </div>

<!-- tabla -->
 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Empresas Registradas <small>Users</small></h2>
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
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                          Listado de tipo de establecimientos registrados
                          </p>

                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                
                                <th>id</th>
                                <th>Tipo Empresa</th>   
                              </tr>
                            </thead>


                            <tbody>
                            @foreach($datos2 as $item)
                              <tr>
                               <td>{{ $item->idtipo_empresa }}</td>
                                <td>{{ $item->tipo }}</td>                               
                              </tr>
                            @endforeach
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


@endsection