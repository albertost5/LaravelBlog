@extends('dashboard/master')

@section('title', 'Create Post')



@section('content')

    <h3 class="text-center mt-5 mb-5">CREATE NEW POST</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('posts.store') }}" method="POST" name="createpost">
        @include('dashboard.post.form._postform')
    </form>
    
@endsection
