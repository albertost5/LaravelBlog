@csrf
{{-- cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT --}}
<div class="form-grop">
    {{-- El for, activa el foco en el elemento establecido mediante el id que se escriba --}}
    <label for="name">Nombre</label>
    {{-- old('idinput') --}}
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
        <br />
    @enderror

    <label for="surname">Apellido</label>
    {{-- old('idinput') --}}
    <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname', $user->surname) }}">
    @error('surname')
        <small class="text-danger">{{ $message }}</small>
        <br />
    @enderror

    <label for="email">Email</label>
    {{-- old('idinput') --}}
    <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
        <br />
    @enderror

    @if ($pw)
        <label for="password">Contraseña</label>
        {{-- old('idinput') --}}
        <input class="form-control" type="password" name="password" id="password"
            value="{{ old('password', $user->password) }}">
        @error('password')
            <small class="text-danger">{{ $message }}</small>
            <br />
        @enderror
    @endif



</div>

<button class="btn btn-primary mt-3" type="submit">Enviar</button>
