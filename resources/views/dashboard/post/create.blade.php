@extends('base/base')

@section('title', 'Crear Post')

@section('body')
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        {{-- cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT --}}
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

@endsection
