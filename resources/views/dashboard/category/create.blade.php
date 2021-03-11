@extends('dashboard/master')

@section('title', 'Crear Post')



@section('content')

    <h3 class="text-center mt-5 mb-5">CREAR NUEVA CATEGORÍA</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('category.store') }}" method="POST" name="createcategory">
        @include('dashboard.category.form._categoryform')
    </form>
    
@endsection
