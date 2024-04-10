@extends('layouts.app')

@section('title', __('site.homepage_title'))

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4">@lang('site.homepage_title')</h1>
            </div>
        </div>
    </div>
@endsection
