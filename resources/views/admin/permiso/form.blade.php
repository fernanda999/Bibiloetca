<div class="form-group">
    <label for="nombre" class="col-sm-2 control-label requerido" >Nombre</label>

    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre" value="{{old('nombre', $data->nombre ?? '')}}" required >
    </div>
  </div>
  <div class="form-group">
    <label for="slug" class="col-sm-2 control-label requerido">Slug</label>

    <div class="col-sm-10">
      <input type="text" name="slug" class="form-control" id="slug" placeholder="slug" value="{{old('nombre', $data->slug ?? '')}}"required>
    </div>
  </div>


