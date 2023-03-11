{{--  view note page  --}}
@extends('layout')

@section('content')
    <h2>{{ $note->title }}</h2>
    <p>{{ $note->body }}</p>
    <p>
        <a href="/notes/{{ $note->id }}/delete">Delete</a>
    </p>
@endsection

