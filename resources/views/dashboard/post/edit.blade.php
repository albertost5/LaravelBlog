@extends('dashboard/master')

@section('title', 'Editar Post ' . $p->id)


@section('content')

    <h3 class="text-center mt-5">EDITAR POST Nº {{ $p->id }}</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('post.update', $p) }}" method="POST" name="updatepost">
        @method('PUT')
        @include('dashboard.post.form._postform')
    </form>
    
@endsection