@extends('dashboard/master')

@section('title', 'Post ' . $p->id)


@section('content')

    <h3 class="text-center mt-5">POST Nº {{ $p->id }}</h3>

    @csrf
    {{-- cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT --}}
    <div class="form-grop">
        {{-- El for, activa el foco en el elemento establecido mediante el id que se escriba --}}
        <label for="title">Título</label>
        {{-- old('idinput') --}}
        <input class="form-control" type="text" name="title" id="title" value="{{ $p->title }}" readonly>
        @error('title')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
    </div>

    <div class="form-grop">
        <label for="url_clean">Url limpia</label>
        <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $p->url_clean }}" readonly>
        @error('url_clean')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
    </div>

    <div class="form-group">
        <label for="">Categoría</label>
        <select class="form-control" name="category_id" id="category_id" disabled>
            @foreach ($categories as $title => $id)
                <option {{ $p->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">
                    {{ $title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Posted</label>
        <select class="form-control" name="posted" id="posted" disabled>
            @include('dashboard.partials.option-yes-not', ['post' => $p])
        </select>
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" id="content" rows="3" name="content" id="content"
            readonly>{{ $p->content }}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
    </div>

    @isset($p->img)
        <div class="row text-center">
            <div class="col">
                <img src={{ asset('images/' . $p->img->image) }} width="200" height="200">
            </div>
        </div>
    @endisset

@endsection
