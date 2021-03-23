@extends('dashboard/master')

@section('title', 'Edit Post ' . $p->id)


@section('content')

    <h3 class="text-center mt-5">EDIT POST Nº {{ $p->id }}</h3>

    @include('dashboard.partials.success')

    <form action="{{ route('posts.update', $p->id) }}" method="POST" name="updatepost">
        @method('PUT')
        @include('dashboard.post.form._postform')
    </form>

    @isset($p->img)
        <div class="row text-center">
            <div class="col">
                <img src={{ asset('images/' . $p->img->image) }} width="200" height="200">
            </div>
        </div>
    @endisset

    <form action="{{ route('posts.image', $p) }}" method="post" enctype="multipart/form-data" class="mt-5" name="updateimg">
        @csrf
        <div class="row">
            <div class="col">
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Subir">
            </div>
        </div>
    </form>

    

@endsection
