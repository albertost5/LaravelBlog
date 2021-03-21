@extends('dashboard/master')

@section('title', 'Index User')


@section('content')
    <h3 class="text-center">USER´S INDEX</h3>

    @include('dashboard.partials.success')

    <a href="{{ route('user.create') }}" class="btn btn-success btn-sm">Nuevo Usuario</a>
    
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Creación</th>
                <th scope="col">Actualización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
                <tr>
                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                    <td></td>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->surname }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role->key }}</td>
                    <td>{{ $u->created_at->format('d-m-Y') }}</td>
                    <td>{{ date('d-m-Y', strtotime($u->updated_at)) }}</td>
                    <td>
                        <a href="{{ route('user.show', $u->id) }}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{ route('user.edit', $u) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('user.destroy', $u) }}" method="POST" name="updateuser">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
@endsection
