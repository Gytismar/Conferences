@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">@lang('site.conferences_list_title')</h1>
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @auth
            <a href="{{ route('conferences.create') }}" class="btn btn-success mb-3">@lang('site.create_conference')</a>
        @endauth
        <div class="row">
            @each('conferences.partials.list', $conferences, 'conference')
        </div>
    </div>
@endsection
