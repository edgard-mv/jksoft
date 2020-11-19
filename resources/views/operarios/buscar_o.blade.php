<form action="{{ route('operarios.buscar') }}" method="get">
    <div class="form-group">
        <div class="input-group ">
            <input type="text" class="form-control" name="valor" placeholder="Buscar..." autofocus>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <span class="fas fa-search"></span>
                </button>
                <a class="btn btn-success" href="{{ route('operarios.nuevo') }}" style="margin-left:650px">
                    <span class="fas fa-plus-square"></span>
                    <strong>Nuevo</strong>
                </a>
            </span>
        </div>
    </div>
</form>
