@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Editar datos del producto')
@section('content')

<div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <form action="{{ route('producto.editar', ['id' => $producto->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <strong><label for="nombre">Nombre del producto</label></strong>
              <input type="text" value="{{ $producto->nombre }}" class="form-control" autocomplete="off" name="nombre">
            </div>

            <div class="form-group">
              <strong><label for="cantidad">Stock</label></strong>
              <input type="number" value="{{ $producto->cantidad }}" class="form-control" autocomplete="off" name="cantidad">
            </div>
            
            <div class="form-group">
              <strong><label for="categoria">Categoría</label></strong>
              <select class="form-control" name="categoria">
                  <option selected disabled>Categoría</option>
                  <option value="Granos basicos">Granos básicos</option>
                  <option value="Carnes y Embutidos">Carnes y Embutidos</option>
                  <option value="Frutas y Verduras">Frutas y Verduras</option>
                  <option value="Panadería y Dulces">Panadería y Dulces</option>
                  <option value="Aceite, Pasta y Legumbres">Aceite, Pasta y Legumbres</option>
                  <option value="Huevos y Lacteos">Huevos y Lácteos</option>
                  <option value="Conservas y Comida Preparada">Conservas y Comida Preparada</option>
                  <option value="Zumos y Bebidas">Zumos y Bebidas</option>
                  <option value="Aperitivos">Aperitivos</option>
                  <option value="Infantil">Infantil</option>
                  <option value="Mariscos">Mariscos</option>
                  <option value="Cosmeticos">Cosméticos</option>
                  <option value="Hogar y Limpieza">Hogar y Limpieza</option>
              </select>
            </div>

            <div class="form-group">
              <strong><label for="unidad">Unidad</label></strong>
              <select class="form-control" name="unidad">
                  <option selected disabled>Unidad</option>
                  <option value="botella">Botella</option>
                  <option value="lata">Lata</option>
                  <option value="bolsa">Bolsa</option>
              </select>
            </div>
            {{-- @foreach ($producto->proveedores as $proveedor)
            <br>
              <div class="form-group">
                <strong><label for="empresa">Empresa proveedora</label></strong>
                <input type="text" value="{{ $proveedor->empresa }}" class="form-control" autocomplete="off" name="empresaproveedora">
              </div>

              <div class="form-group">
                  <strong><label for="cantidadproveida">Cantidad del producto</label></strong>
                  <input type="number" value="{{ $proveedor->cantidad }}" class="form-control"  autocomplete="off" name="cantidadproveida"  >
              </div>
              <br>
            @endforeach --}}

            <div class="form-group">
              <strong><label for="fecha">Fecha de la provisión</label></strong>
              <input type="date"  value="{{ $producto->updated_at->format("Y-m-d") }}" class="form-control" autocomplete="off" name="fecha">
            </div>

            <div class="form-group">
                <strong><label for="precio">Precio por unidad del producto</label></strong>
                <input type="number" value="{{ $producto->precio }}" class="form-control"  autocomplete="off" name="precio" >
           </div>
                                    
            <div class="form-group" style="text-align:center">
              <button class="btn btn-primary" type="submit">Guardar</button>
              <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>
            </div>
          </form>
        </div>
    </div>



@endsection