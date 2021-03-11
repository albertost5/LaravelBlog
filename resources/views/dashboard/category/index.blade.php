@extends('dashboard/master')

@section('title', 'Index Category')


@section('content')
    <h3 class="text-center">CATEGORY´S INDEX</h3>

    @include('dashboard.partials.success')

    <a href="{{ route('category.create') }}" class="btn btn-success btn-sm">Nueva Categoría</a>
    
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">URL</th>
                <th scope="col">Creación</th>
                <th scope="col">Actualización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                    <td></td>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->url_clean }}</td>
                    <td>{{ $c->created_at->format('d-m-Y') }}</td>
                    <td>{{ date('d-m-Y', strtotime($c->updated_at)) }}</td>
                    <td>
                        <a href="{{ route('category.show', $c->id) }}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{ route('category.edit', $c) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('category.destroy', $c) }}" method="POST" name="updatecategory">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
