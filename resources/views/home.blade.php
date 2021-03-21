@extends('layouts.app')

@section('title','Blog - Home')
    


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--  {{ auth()->user()->name . __(' you are logged in!') }}  --}}

                    {{ auth()->user()->role }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
