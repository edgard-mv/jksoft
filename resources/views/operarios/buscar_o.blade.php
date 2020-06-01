<form action="{{ route('operario.buscar') }}" method="get">
<div class="form-group">
    <div class="input-group ">
        <input type="text" class="form-control" name="searchvalues" placeholder="Buscar..." >
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('operarios.nuevo') }}"><button class="btn btn-success" style="margin-left:650px">Nuevo operario</button></a>
        </span>
    </div>
</div>
</form>