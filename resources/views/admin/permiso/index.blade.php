@extends("theme.$theme.layout")
@section('titulo')
Permiso
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
          <h3 class="card-title">Persmiso</h3>
          <div class="card-tools pull-right">
            <a href="{{route('crear_permiso')}}" class="btn btn-outline-secondary btn-sm pull-right">
                <i class="fa fa-fw fa-plus-circle"></i> Crear Permiso
            </a>
        </div>
        </div>
        <div class="card-body table-responsive no-padding">
            <table class="table table-striped table-bordered table-hover" id="tabla-data">
                <thead>
                    <tr>
                        <th>ID</th>
                         <th>NOMBRE</th>
                        <th>SLUG</th>
                         <th></th>
                    </tr>
                </thead>
               <tbody>
                  @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nombre }}</td>
                        <td>{{ $data->slug }}</td>
                         <td>
                            <a href="{{route('editar_permiso', ['id'=>$data->id])}} " class="btn-accion-tabla tooltipsC" title="Editar este Registro">
                                <i class="fa fa-edit "></i>
                             </a>
                             <form action="{{route('eliminar_permiso', ['id'=>$data->id])}}" class="d-inline form-eliminar" method="POST">
                                 @csrf @method('delete')
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
