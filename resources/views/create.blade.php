@extends('layout')

@section('content')
    <form method="POST" action="/notes/store">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" name="body" placeholder="Body">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
