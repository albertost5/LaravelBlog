@extends('dashboard/master')

@section('title', 'Crear Usuario')



@section('content')

    <h3 class="text-center mt-5 mb-5">CREAR NUEVA CATEGORÍA</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('user.store') }}" method="POST" name="createuser">
        @include('dashboard.user.form._userform', ['pw' => true])
    </form>
    
@endsection
