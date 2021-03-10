@extends('dashboard/master')

@section('title', 'Crear Post')



@section('content')

    <h3 class="text-center mt-5 mb-5">CREAR NUEVO POST</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('post.store') }}" method="POST" name="createpost">
        @include('dashboard.post.form._postform')
    </form>
    
@endsection
