@extends('layouts.app')

@section('title', 'Conference Edit Form')

@section('content')
    <form action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')
        @auth
            <div><input type="submit" value="Update"></div>
        @endauth
    </form>
@endsection
