@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime">{{ session('status') }}</div>
    @endif
    <h1>{{ $conference['title'] }}</h1>
    <p>{{ $conference['content'] }}</p>
    <p>Date: {{ \Carbon\Carbon::parse($conference['conference_date'])->format('F d, Y') }}</p>
    <p>Address: {{ $conference['address'] }}</p>
    <p>Attending People Count: {{ $conference['attending_people_count'] }}</p>
    <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button">Edit</button></a>
@endsection
