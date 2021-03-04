<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops - LaravelBlog</title>
</head>

<body>

    <h3>LOOP PAGE</h3>

    <h4>LOOP FOR</h4>
    @for ($i = 0; $i < count($postarray); $i++)
        <p>Posición {{ $i + 1 }}, valor {{ $postarray[$i] }}</p>
    @endfor

    <h4>LOOP FOREACH. ENUM USING VARIABLE $loop</h4>
    @foreach ($postarray as $p)
        <li>
            @if ($loop->first)
                Primer valor 
            @elseif ($loop->last)
                Último valor 
            @else
                Valor medio
            @endif

            {{ $loop->iteration }}: {{ $p }}
        </li>

    @endforeach

    <h4>LOOP FORELSE. EMPTY ARRAY</h4>
    @forelse ($emptyarray as $e)
        <p>{{ $e }}</p>
    @empty
        <p>El array está vacío, tamaño {{ sizeof($emptyarray) }}.</p>
    @endforelse

    @isset($postarray)
        <p>Array de tamaño con count: {{ count($postarray) }}</p>
        <p>Array de tamaño con sizeof: {{ sizeof($postarray) }}</p>
    @endisset






</body>

</html>
