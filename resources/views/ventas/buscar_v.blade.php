<form action="" method="get">
    <div class="form-group">
        <div class="form-check form-check-inline">
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
        </div>
        <div class="input-group ">
            <input type="text" class="form-control" name="valor" placeholder="Buscar..." autofocus>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <span class="fas fa-search"></span>
                </button>
                <div class="btn-group dropright">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <strong>Ir a</strong>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('venta.todos') }}">Todos</a>
                      <a class="dropdown-item" href="{{ route('venta.por_tipo', ['tipo' => 'credito']) }}">Crédito</a>
                      <a class="dropdown-item" href="{{ route('venta.por_tipo', ['tipo' => 'contado']) }}">Contado</a>
                    </div>
                </div>
                <a class="btn btn-success" href="/credito" style="margin-left:440px">
                    <span class="fas fa-plus-square"></span>
                    <strong>Crédito</strong>
                </a>
                <a class="btn btn-primary" href="/contado">
                    <span class="fas fa-plus-square"></span>
                    <strong>Contado</strong>
                </a>
            </span>
        </div>
    </div>
</form>
{{-- <div class="form-group">
    <div class="input-group ">
        <input type="text" class="form-control" name="searchventa" placeholder="Buscar..." >
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">
                <span class="fas fa-search"></span>
            </button>
            <a href="/credito"><button class="btn btn-success" style="margin-left:550px">
                <span class="fas fa-plus-square"></span>
                Crédito</button></a>
            <a href="/contado">
                <button class="btn btn-primary" >
                    <span class="fas fa-plus-square"></span>
                    Contado
                </button>
            </a>
        </span>
    </div>
</div> --}}