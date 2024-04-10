@extends('layouts.app')

@section('title', 'Conference creation form')

@section('content')
    <h4>Conference creation form</h4>
    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf
        @include('conferences.partials.form')
        <div class="card-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
