@extends('dashboard/master')

@section('title', 'Categoría ' . $user->id)


@section('content')

    <h3 class="text-center mt-5">CATEGORÍA Nº {{ $user->id }}</h3>

    @csrf
    {{-- cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT --}}
    <div class="form-grop">
        {{-- El for, activa el foco en el elemento establecido mediante el id que se escriba --}}
        <label for="name">Nombre</label>
        {{-- old('idinput') --}}
        <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" readonly>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
        <label for="surname">Apellido</label>
        <input class="form-control" type="text" name="surname" id="surname" value="{{ $user->surname }}" readonly>
        @error('surname')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
    </div>
    
@endsection
