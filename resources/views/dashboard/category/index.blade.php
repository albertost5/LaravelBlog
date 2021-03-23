@extends('dashboard/master')

@section('title', "Categories Index")


@section('content')
    <h3 class="text-center">CATEGORIES INDEX</h3>

    @include('dashboard.partials.success')

    <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm">New Category</a>
    
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Url</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Actions</th>
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
                        <a href="{{ route('categories.show', $c->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('categories.edit', $c) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="javascript:void(0);" onclick="$(this).find('form').submit();" class="btn btn-danger btn-sm">
                            <form action="{{ route('categories.destroy', $c->id) }}" method="POST" name="updatecategory" id="updatecategory">
                                @method('DELETE')
                                @csrf
                            </form>
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
