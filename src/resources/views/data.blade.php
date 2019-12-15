<h1>Data</h1>

@foreach ($data as $datum)

    <h2>$datum['id']</h2>
    <ul>
    @foreach ($datum as $field => $value)
        <li>
            {{ $field }} : {{ $value }}
        </li>
    @endforeach
    </ul>

@endforeach