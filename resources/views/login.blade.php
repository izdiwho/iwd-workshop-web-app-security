@extends('layout')

@section('content')
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="username">Username</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
