@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="d-flex justify-content-center align-items-center">
        @include('conferences.partials.list', ['conference' => $conference])
    </div>
@endsection
