@extends('layouts.app')

@section('content')
    <h1>Conferences list</h1>
    @if(session('status'))
        <div style="background-color: green">{{ session('status') }}</div>
    @endif
    @auth
        <a href="{{ route('conferences.create') }}"><button type="button">Create conference</button></a>
    @endauth
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
