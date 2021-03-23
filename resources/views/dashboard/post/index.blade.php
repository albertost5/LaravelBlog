@extends('dashboard/master')

@section('title', "Posts Index")


@section('content')
    <h3 class="text-center">POSTS INDEX</h3>

    @include('dashboard.partials.success')

    <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm">New Post</a>
    
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Published</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Actions</th>
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
                        <a href="{{ route('posts.show', $p->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('posts.edit', $p) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="javascript:void(0);" onclick="$(this).find('form').submit();" class="btn btn-danger btn-sm">
                            <form action="{{ route('posts.destroy', $p->id) }}" method="POST" name="updatepost" id="updatepost">
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

    {{ $posts->links() }}
@endsection
