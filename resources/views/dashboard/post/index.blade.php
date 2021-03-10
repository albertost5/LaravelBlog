@extends('dashboard/master')

@section('title', 'Index')


@section('content')
    <h3 class="text-center">POST´S INDEX</h3>

    <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm">NUEVO POST</a>

    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
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
                    <td>{{ $p->posted }}</td>
                    <td>{{ $p->created_at->format('d-m-Y') }}</td>
                    <td>{{ date('d-m-Y', strtotime($p->updated_at)) }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
