@extends ('Representante_ventas.menu_representante_V_')
@section('contenido')
<div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <form action="{{url("/crearcliente_c")}}" method="POST" class="navbar-form navbar-right" role="search">
            {{ csrf_field() }}
            
            <div class="form-group  is-empty">
                <input type="text" name="termino_busqueda" class="form-control" placeholder="Buscar">
                <span class="material-input"></span>
            </div>
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
            </button>
            <div class="form-group  is-empty"> 
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="opcion" id="radios-0" value="nombre" checked="checked">
                    nombre
                </label> 
                <label class="radio-inline" for="radios-1">
                    <input type="radio" name="opcion" id="radios-1" value="apellido">
                    apellido
                </label> 
                
            </div>
        </form> 
    </div>
    <div class="col-md-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">


        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Lista de clientes</h4>

            </div>

            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                    <th>Nombre de la empresa</th>
                    <th>Primer nombre</th>
                    <th>Primer apellido</th>
                    <th>Dirrecion 1</th>
                    <th>Seleccion</th>
                    </thead>
                    <tbody>
                        @foreach($consulta as $c)
                        <tr>
                            <td>{{$c->nombre_de_la_empresa}}</td>
                            <td>{{$c->contactLastName}}</td>
                            <td>{{$c->contactFirstName}}</td>
                            <td>{{$c->addressLine1}}</td>
                            <td>
                                <a href="{{ route('identificar_cliente')}}">
                                    <i class="material-icons">near_me</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>


@stop