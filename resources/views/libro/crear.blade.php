
@extends("theme.$theme.layout")
@section('titulo')
Libros
@endsection
@section("styles")
<link href="{{asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/libro/crear.js")}}" type="text/javascript"></script>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
            <div class="card card-info">
                    <div class="card-header with-border">
                        <h3 class="card-title">Crear Libros</h3>
                        <div class="card-tools float-right ">
                        <a href="{{route('libro')}}" class="btn btn-info btn-sm ">
                            <i class="fa fa-fw fa-reply-all"></i> Volver al Listado</a>
                        </div>
                    </div>
                    <form action="{{route('guardar_libro')}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            @include('libro.form')

                        </div>
                        <div class="card-footer">
                            <div class="col-lg-3">
                                <div col-lg-3>
                                    @include('includes.boton-form-crear')
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
    </div>
</div>
@endsection
