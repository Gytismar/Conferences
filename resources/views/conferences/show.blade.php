@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime">{{ session('status') }}</div>
    @endif
    @include('conferences.partials.list', ['conference' => $conference])
@endsection
