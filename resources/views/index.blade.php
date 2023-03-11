@extends('layout')

@section('content')
    @if (Auth::check())
        <h2>Your Notes</h2>
        <form action="/" method="GET">
            <input type="text" name="search" placeholder="Search">
            <button type="submit">Search</button>
        </form>
        @if($search != null)
            <p>Search results for: {!! $search !!}</p>
            <p>Search results for: {{  $search  }}</p>
        @endif
        <p>
            <a href="/notes/create">Create a new note</a>
        </p>

        <ul>
            @foreach ($notes as $note)
                <li>
                    <a href="/notes/{{ $note->id }}">
                        {{ $note->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <h2>Welcome to Notes!</h2>
        <p>
            Please <a href="/login">log in</a> to see your notes.
        </p>
    @endif
@endsection
