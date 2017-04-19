@extends('layouts.app')

<?php $sub = 'Session' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Sessions</h1>
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">

        @foreach (App\UserSession::all() as $usersession)
            @if ($usersession->user_id == Auth::user()->id)
                <div>
                    <a href="/sessions/{{ $usersession->session_id }}">{{
                        App\Session::findOrFail($usersession->session_id)->name
                        }}
                </div>
                </a>
            @endif
        @endforeach

            @foreach (App\Session::all() as $session)
                @if ($session->created_by == Auth::user()->id)
                    <div>
                        <a href="/sessions/{{ $session->id }}">{{
                        App\Session::findOrFail($session->id)->name
                        }}
                    </div>
                @endif
            @endforeach
    </div>

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