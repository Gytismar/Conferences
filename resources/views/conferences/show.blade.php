@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime">{{ session('status') }}</div>
    @endif
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        @include('conferences.partials.list', ['conference' => $conference])
    </div>
@endsection
