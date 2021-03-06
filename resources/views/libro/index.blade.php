
@extends("theme.$theme.layout")
@section('titulo')
Libros
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
            <div class="card card-info">
                    <div class="card-header with-border">
                        <h3 class="card-title">Libros</h3>
                        <div class="card-tools float-right">
                            <a href="{{ route('crear_libro') }}" class="btn btn-block btn-success btn-sm ">
                                <i class="fa fa-fw fa-plus-circle"></i> Nuevo Registro
                            </a>

                         </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover" id="tabla-data">
                        <thead>
                            <tr>
                                <th class="width20">ID</th>
                                <th>titulo</th>

                                <th class="width80"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                            <td>{{$data->titulo}}</td>

                            <td>
                                <a href="{{route('editar_libro', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{route('eliminar_libro', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("DELETE")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-times-circle text-danger"></i>
                                    </button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection
