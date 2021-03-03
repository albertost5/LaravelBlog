<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - LaravelBlog</title>
</head>

<body>

    <h1>Home Page</h1>
    {{--  Envía los datos obviando la función htmlspecialchars, haciendo que puedan hacer un mal uso. Para ello {!!  !!}} --}}
    <p>
        {!! "<script>alert('Welcome')</script>" !!}
    </p>

    {{--  Envía los datos obviando la función htmlspecialchars  --}}
    <p>Welcome {{ $name }} {{ $surname }}</p>
    <p>The current UNIX timestamp is {{ time() }}</p>

</body>

</html>
