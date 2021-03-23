@extends('dashboard/master')

@section('title', 'Edit Usuario ' . $user->id)


@section('content')

    <h3 class="text-center mt-5">EDITAR USUARIO Nº {{ $user->id }}</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('users.update', $user->id) }}" method="POST" name="updatecategory">
        @method('PUT')
        @include('dashboard.user.form._userform', ['pw' => false])
    </form>
    
@endsection