@extends("theme.$theme.layout")
@section('titulo')
Sistema Menus
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
      <div class="card card-danger">
        <div class="card-header with-border">
          <h3 class="card-title">Crear Menu</h3>
          <div class="card-tools">
              <a href="{{ route('menu') }}" class="btn btn-outline-info btn-sm">
                  <i class="fa fa-fw fa-reply-all"></i>Volver al listado
              </a>
          </div>
        </div>
        <form action="{{ route('guardar_menu') }}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
            @csrf
            <div class="card-body">
                @include('admin.menu.form')
            </div>
            <div class="card-footer">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                @include("includes.boton-form-crear")
                </div>
            </div>
        </form>
      </div>

    </div>
</div>
@endsection
