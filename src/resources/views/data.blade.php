<h1>Data</h1>

@foreach ($data as $datum)

    <ul>
    @foreach ($datum as $field => $value)
        <li>
            {{ $field }} : {{ $value }}
        </li>
    @endforeach
    </ul>

@endforeach