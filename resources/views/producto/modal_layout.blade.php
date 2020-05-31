@extends('producto.modal')
@section('content')
    <p>Seguro que desea eliminar este producto?</p>
@endsection

@section('footer')
<button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
<button class="btn btn-info" type="submit">Aceptar</button>
@endsection