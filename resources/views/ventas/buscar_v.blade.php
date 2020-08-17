<form action="" method="get">
    <div class="form-group">
        {{-- <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="id" checked>
            <label class="form-check-label" for="inlineRadio1">ID</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio3" value="nombre">
            <label class="form-check-label" for="inlineRadio3">Nombre</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="empresa">
            <label class="form-check-label" for="inlineRadio2">Empresa</label>
        </div> --}}
        <div class="input-group ">
            {{-- <input type="text" class="form-control" name="valor" placeholder="Buscar..." autofocus> --}}
            <span class="input-group-btn">
                {{-- <button type="submit" class="btn btn-primary">
                    <span class="fas fa-search"></span>
                </button> --}}
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin-left:15px">
                    <a class="btn btn-outline-info" id="radio1" href="{{ route('venta.todos') }}">Todos</a>
                    <a class="btn btn-outline-info" id="radio2" href="{{ route('venta.por_tipo', ['tipo' => 'credito']) }}">Crédito</a>
                    <a class="btn btn-outline-info" id="radio3" href="{{ route('venta.por_tipo', ['tipo' => 'contado']) }}">Contado</a>
                </div>
                <a class="btn btn-success" href="{{ route('venta.credito.nuevo') }}" style="margin-left:745px">
                    <span class="fas fa-plus-square"></span>
                    <strong>Crédito</strong>
                </a>
                <a class="btn btn-primary" href="{{ route('venta.contado.nuevo') }}">
                    <span class="fas fa-plus-square"></span>
                    <strong>Contado</strong>
                </a>
            </span>
        </div>
    </div>
</form>

<script>

    $(document).ready(function () {
        let saleType = "{{ $type ?? '' }}";
        if (saleType == "credito") {
            $("#radio2").button('toggle');
        } else if (saleType == "contado") {
            $("#radio3").button('toggle');
        } else {
            $("#radio1").button('toggle')
        }
    });

</script>
