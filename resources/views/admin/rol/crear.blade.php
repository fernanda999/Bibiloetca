@extends("theme.$theme.layout")
@section('titulo')
Roles
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
      <div class="card card-danger">
        <div class="card-header ">
          <h3 class="card-title">Crear Rol</h3>
          <div class="card-tools float-right ">
              <a href="{{ route('rol') }}" class="btn btn-block btn-info btn-sm ">
                  <i class="fa fa-fw fa-reply-all"></i> Volver al Listado
              </a>
          </div>
        </div>
        <form action="{{ route('guardar_rol') }}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
            @csrf
            <div class="card-body">
                @include('admin.rol.form')
            </div>
            <div class="card-footer">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                @include("includes.boton-form-crear")
                </div>
            </div>
        </form>
      </div>

    </div>
</div>
@endsection
