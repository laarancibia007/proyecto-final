@extends('layouts.app')
@section('libreria')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
<h1>Registro de salida de productos</h1>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            {{-- <label for="producto" class="form-label">Producto</label> --}}
            <select class="form-select form-select-lg" name="producto" id="producto">
                <option selected>Seleccione un producto</option>
                @forelse ($listaprod as $p)
                    <option value="{{$p->id}}" data-precio="{{$p->precio}}" data-stock="{{$p->stock}}"> {{$p->nombre}}</option>
                @empty
                <option>No hay productos</option>
                @endforelse

            </select>
        </div>
    </div>
    <div class="col-md-6">
        <button class="btn btn-success" type="button" id="btnAdd">Agregar</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            @csrf
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Vender</button>
            {{-- <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div> --}}
        </form>
    </div>
</div>

@endsection
@section('script')
    <script>
        $(()=>{
            $('#btnAdd').click(
                function (e) {
                    let el = `
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="id[]" id="id" placeholder="" readonly value="${$('#producto').val()}">
                            </td>
                            <td>
                                <input type="number" class="form-control" name="cant[]" id="cant" placeholder="" value="1" min="1" max="${$('#producto').find(':selected').data('stock')}">
                                <strong>${$('#producto').find(':selected').data('stock')}</strong>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="precio[]" id="precio" placeholder="" readonly value="${$('#producto').find(':selected').data('precio')}">
                            </td>
                            <td>
                                <button class="btn btn-danger" type="button" id="btnDel">Eliminar</button>
                            </td>
                        </tr>
                    `;
                    $('tbody').append(el);
                }
            );
            $('table').delegate('#btnDel', 'click', function (){
                this.closest('tr').remove();
            });
        });
    </script>
@endsection
