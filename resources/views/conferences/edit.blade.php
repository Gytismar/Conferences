@extends('layouts.app')

@section('title', 'Conference Edit Form')

@section('content')
    <form action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')
        @auth
            <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        @endauth
    </form>
@endsection
