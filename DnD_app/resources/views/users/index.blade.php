@extends('layouts.app')

<?php $sub = 'Character' ?>

@extends('layouts.list')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>All Users</h1>
    </div>

    @foreach ($users as $user)
        <div class="col-md-6 col-md-offset-3">
            <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
        </div>

    @endforeach

    <div class="col-md-6 col-md-offset-3">
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form method="link" action="/users/create">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Character </button>
            </div>
        </form>
    </div>
@stop