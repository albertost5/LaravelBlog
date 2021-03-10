@extends('dashboard/master')

@section('title', 'Crear Post')



@section('content')

    <h3 class="text-center mt-5 mb-5">CREAR NUEVO POST</h3>

    @include('dashboard.partials.success')

    <form action="{{ route('post.store') }}" method="POST" name="createpost">
        @csrf
        {{-- cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT --}}
        <div class="form-grop">
            {{-- El for, activa el foco en el elemento establecido mediante el id que se escriba --}}
            <label for="title">Título</label>
            <input class="form-control" type="text" name="title" id="title">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
                <br />
            @enderror
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" name="url_clean" id="url_clean">

        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" id="content" rows="3" name="content" id="content"></textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
                <br />
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
    </div>
@endsection
