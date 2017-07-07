@extends("layout.master")

@section("content")
  
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
                            listado de Empresa
                          </p>

                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                               <th></th>
                                <th>Empresa</th>
                                 <th>tipo empresa</th>
                                <th>Representante</th>                               
                                <th>usuario</th>
                                <th>idempresa</th>
                               
                              </tr>
                            </thead>


                            <tbody>
                            @foreach($info as $item)
                              <tr>
                                 <td>
                                    <form method="POST" action="establecimiento.store" class="pull-left">
                                        {{ csrf_field() }}
                                       <input name="_method" value="PUSH" type="hidden">
                                      <button class="btn btn-primary" type="button">Editar</button>
                                    </form>

                                    <form method="POST" action="establecimiento.destroy"  class="pull-left">
                                      {{csrf_field()}}
                                      <input name="_method" value="DELETE" type="hidden">
                                      <button class="btn btn-primary" type="button">Eliminar</button>
                                    </form>

                                 </td>
                                <td>{{ $item->razon_social }}</td>
                                  <td>{{ $item->tipo }}</td>
                                <td>{{ $item->responsable }}</td>                              
                                <td>{{ $item->nombre_usuario }}</td>
                                 <td>{{ $item->idempresa}}</td>
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