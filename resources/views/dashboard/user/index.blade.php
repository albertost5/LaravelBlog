@extends('dashboard/master')

@section('title', 'Users Index')


@section('content')
    <h3 class="text-center">USERS INDEX</h3>

    @include('dashboard.partials.success')

    <a href="{{ route('users.create') }}" class="btn btn-success btn-sm">New User</a>
    
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Actions</th>
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
                        <a href="{{ route('users.show', $u->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('users.edit', $u) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="javascript:void(0);" onclick="$(this).find('form').submit();" class="btn btn-danger btn-sm">
                            <form action="{{ route('users.destroy', $u->id) }}" method="POST" name="updateuser" id="updateuser">
                                @method('DELETE')
                                @csrf
                            </form>
                            Delete
                        </a>
                        {{-- <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault();
                                                                 document.getElementById('updateuser').submit();">
                                {{ __('Delete') }}
                        </a>
                        <form action="{{ route('user.destroy', $u->id) }}" method="POST" id="updateuser" class="d-none">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
@endsection
