@extends ('Representante_ventas.menu_representante_V_')
@section('contenido')

<div class="row">
    <div class="card-header" data-background-color="purple">
        <h3 class="title">Formulario cliente nuevo</h3>

    </div>



    <div class="col-md-2">

    </div>
    <div class="col-md-6">

        <form action="{{url("/crearcliente_p")}}" method="POST" >
            {{ csrf_field() }}



            <!-- Text input-->
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">Nombre de la empresa</label>
                    <input type="text" name="nombre_de_la_empresa" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">Primer nombre del contacto</label>
                    <input type="text" name="primer_nombre" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">primer apellido del contacto</label>
                    <input type="text" name="primer_apellido" class="form-control">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">telefono</label>
                    <input type="text" name="telefono" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">dirrecion 1</label>
                    <input type="text" name="direcion_1" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">dirrecion 2</label>
                    <input type="text" name="direcion_2" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">ciudad</label>
                    <input type="text" name="ciudad" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">estado</label>
                    <input type="text" name="estado" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">codigo postal</label>
                    <input type="text" name="codigo_postal" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">pais</label>
                    <input type="text" name="pais" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">limete del credito</label>
                    <input type="text" name="limete_credito" class="form-control">
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-12" >
                <div class="form-group" a>

                    <button id="singlebutton" class="btn btn-primary">Crear</button>
                </div>
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
        @if(Session()->has('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}
            <a href="{{ route('identificar_cliente')}}"  class=" btn btn-primary">volver a clientes</a>
        </div>
        @else
        @endif
    </div>

</div>

@stop

