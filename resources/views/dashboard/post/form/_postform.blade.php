@csrf
{{-- cross-site request forgery, se utiliza para evitar la falsificación de solicitudes entre sitios -> EXPLOIT --}}
<div class="form-grop">
    {{-- El for, activa el foco en el elemento establecido mediante el id que se escriba --}}
    <label for="title">Título</label>
    {{-- old('idinput') --}}
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $p->title) }}">
    @error('title')
        <small class="text-danger">{{ $message }}</small>
        <br />
    @enderror
</div>

<div class="form-grop">
    <label for="url_clean">Url limpia</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean"
        value="{{ old('url_clean', $p->url_clean) }}">
    @error('url_clean')
        <small class="text-danger">{{ $message }}</small>
        <br />
    @enderror
</div>

<div class="form-group">
    <label for="">Categoría</label>
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $title => $id)
            <option {{ $p->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">
                {{ $title }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Posted</label>
    <select class="form-control" name="posted" id="posted">
        @include('dashboard.partials.option-yes-not', ['post' => $p])
    </select>
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" id="content" rows="3" name="content"
        id="content">{{ old('content', $p->content) }}</textarea>
    @error('content')
        <small class="text-danger">{{ $message }}</small>
        <br />
    @enderror
</div>

<button class="btn btn-primary" type="submit">Enviar</button>
