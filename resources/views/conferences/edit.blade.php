@extends('layouts.app')

@section('title', __('site.conference_edit_form_title'))

@section('content')
    <form action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')
        @auth
            <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">@lang('site.update')</button>
            </div>
        @endauth
    </form>
@endsection
