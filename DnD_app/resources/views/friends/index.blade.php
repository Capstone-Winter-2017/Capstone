@extends('layouts.app')

<?php $sub = 'Friend'; $model = 'friends' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Friends</h1>
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">

        @foreach (App\Friend::all() as $friend)
            @if ($friend->user_id == Auth::user()->id)
                <div>
                    <a href="/users/{{ $friend->friend_id }}">{{
                        App\User::findOrFail($friend->friend_id)->name
                        }}
                </div>
                </a>
            @endif
        @endforeach
    </div>

    <div class="col-md-6 col-md-offset-3">
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form method="link" action="/friends/create">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="form-friend">
                <button type="submit" class="btn btn-primary form-control">Add Friend </button>
            </div>
        </form>
    </div>
@stop