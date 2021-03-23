@extends('dashboard/master')

@section('title', 'Category ' . $category->id)


@section('content')

    <h3 class="text-center mt-5">CATEGORY Nº {{ $category->id }}</h3>

    @csrf
    {{-- cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT --}}
    <div class="form-grop">
        {{-- El for, activa el foco en el elemento establecido mediante el id que se escriba --}}
        <label for="title">Title</label>
        {{-- old('idinput') --}}
        <input class="form-control" type="text" name="title" id="title" value="{{ $category->title }}" readonly>
        @error('title')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
        <label for="url_clean">Clean Url</label>
        <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $category->url_clean }}" readonly>
        @error('url_clean')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
    </div>
    
@endsection
