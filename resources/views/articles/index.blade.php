@extends('layouts.app')

@section('content')
    <h1>Articles list</h1>
    @if(session('status'))
        <div style="background-color: green">{{ session('status') }}</div>
    @endif
    <a href="{{ route('articles.create') }}"><button type="button">Create article</button></a>
    @each('articles.partials.list', $articles, 'article')
@endsection
