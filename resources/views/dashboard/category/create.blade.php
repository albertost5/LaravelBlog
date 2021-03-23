@extends('dashboard/master')

@section('title', 'Create Category')



@section('content')

    <h3 class="text-center mt-5 mb-5">CREATE NEW CATEGORY</h3>

    @include('dashboard.partials.success')
    
    <form action="{{ route('categories.store') }}" method="POST" name="createcategory">
        @include('dashboard.category.form._categoryform')
    </form>
    
@endsection
