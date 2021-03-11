@extends('dashboard/master')

@section('title', 'Editar Categoría ' . $category->id)


@section('content')

    <h3 class="text-center mt-5">EDITAR CATEGORÍA Nº {{ $category->id }}</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('category.update', $category) }}" method="POST" name="updatecategory">
        @method('PUT')
        @include('dashboard.category.form._categoryform')
    </form>
    
@endsection