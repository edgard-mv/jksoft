<form action="{{ route('producto.buscar') }}" method="get">
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="id">
            <label class="form-check-label" for="inlineRadio1">ID</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio3" value="nombre">
            <label class="form-check-label" for="inlineRadio3">Nombre</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="empresa" checked>
            <label class="form-check-label" for="inlineRadio2">Empresa</label>
        </div>
        <div class="input-group ">
            <input type="text" class="form-control" name="valor" placeholder="Buscar..." >
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <span class="fas fa-search"></span>
                </button>
                <a class="btn btn-success" href="{{ route('producto.nuevo') }}" style="margin-left:650px">
                    <span class="fas fa-plus-square"></span>
                    <strong>Nuevo</strong>
                </a>
            </span>
        </div>
    </div>
</form>
