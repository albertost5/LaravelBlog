<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
    <title>Create New Post - LaravelBlog</title>

</head>

<body>

    <form action="{{ route("post.store") }}" method="POST">
        @csrf
        {{--  cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT  --}}
        <div class="form-grop">
            {{-- El for, activa el foco en el elemento establecido mediante el id que se escriba --}}
            <label for="title">Título</label>
            <input class="form-control" type="text" name="title" id="title">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" name="url" id="url_clean">
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" id="content" rows="3" name="content" id="content"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
