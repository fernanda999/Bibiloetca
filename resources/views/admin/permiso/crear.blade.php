@extends("theme.$theme.layout")
@section('titulo')
Permisos
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection
@section('content')

<div class="row">
    <div class="col-sm-12">
      <div class="card card-info">
        <div class="card-header with-border">
          <h3 class="card-title">Crear Persmiso</h3>
          <div class="card-tools">
            <a href="{{ route('permiso') }}" class="btn btn-outline-info btn-sm">
                <i class="fa fa-fw fa-reply-all"></i>Volver al listado
            </a>
        </div>
        </div>
        <form action="{{ route('guardar_permiso') }}" id="form-general" class="form-horizontal" method="post">
            @csrf
            <div class="card-body">
                @include('admin.permiso.form')
            </div>
            <div class="card-footer">
                <div class="col-sm-2"></div>
                <div class="colsm-8">
                @include("includes.boton-form-crear")
                </div>
            </div>
        </form>
      </div>

    </div>
</div>
@endsection
