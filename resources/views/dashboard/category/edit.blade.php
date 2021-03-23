@extends('dashboard/master')

@section('title', 'Edit Category ' . $category->id)


@section('content')

    <h3 class="text-center mt-5">EDIT CATEGORY Nº {{ $category->id }}</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('categories.update', $category->id) }}" method="POST" name="updatecategory">
        @method('PUT')
        @include('dashboard.category.form._categoryform')
    </form>
    
@endsection