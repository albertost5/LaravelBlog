@extends('dashboard/master')

@section('title', 'Index Post')


@section('content')
    <h3 class="text-center">POST´S INDEX</h3>

    @include('dashboard.partials.success')

    <a href="{{ route('post.create') }}" class="btn btn-success btn-sm">Nuevo Post</a>
    
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Categoría</th>
                <th scope="col">Publicado</th>
                <th scope="col">Creación</th>
                <th scope="col">Actualización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                    <td></td>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->title }}</td>
                    <td>{{ isset($p->category->title) ? $p->category->title : '-' }}</td>
                    <td>{{ $p->posted }}</td>
                    <td>{{ $p->created_at->format('d-m-Y') }}</td>
                    <td>{{ date('d-m-Y', strtotime($p->updated_at)) }}</td>
                    <td>
                        <a href="{{ route('post.show', $p->id) }}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{ route('post.edit', $p) }}" class="btn btn-warning btn-sm">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ route('post.destroy', $p) }}" onclick="event.preventDefault();
                                                                 document.getElementById('updatepost').submit();">
                                {{ __('Borrar') }}
                            </a>
                        <form action="{{ route('post.destroy', $p) }}" method="POST" name="updatepost" id="updatepost" class="d-none">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
