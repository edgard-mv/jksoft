@isset($msgs)
    <ul class="list-group">
        @foreach ($msgs as $msg)
            <li class="list-group-item list-group-item-danger">
                <span class="fas fa-exclamation-triangle"> </span>
                <strong>{{ $msg }}</strong>
            </li>
        @endforeach
    </ul>
@endisset