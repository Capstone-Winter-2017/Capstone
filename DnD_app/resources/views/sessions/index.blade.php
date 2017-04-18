@extends('layouts.app')

<?php $sub = 'Session' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>All Sessions</h1>
    </div>

    @foreach ($sessions as $session)
        <div class="col-md-6 col-md-offset-3">

            <a href="/sessions/{{ $session->id }}">{{ $session->name }}</a>
            </div>
    @endforeach

    <div class="col-md-6 col-md-offset-3">
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form method="link" action="/sessions/create">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Session </button>
            </div>
        </form>
    </div>
@stop