@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-m6">
        <h1>Formulario de insercion de categorias</h1>
    </div>
    <div class="row">
        <form action="" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label>
              <input type="text"
                  class="form-control form-control-sm" name="nombre" id="" aria-describedby="helpId" placeholder="" required>
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Choose file</label>
              <input type="text"
                  class="form-control form-control-sm" name="nombre" id="" aria-describedby="helpId" placeholder="" required>
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>

</div>
@endsection
