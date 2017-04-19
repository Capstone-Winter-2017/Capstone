@extends('layouts.app')

<?php $sub = 'Group' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Groups</h1>
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">

        @foreach (App\UserGroup::all() as $usergroup)
            @if ($usergroup->user_id == Auth::user()->id)
                <div>
                    <a href="/groups/{{ $usergroup->group_id }}">{{
                        App\Group::findOrFail($usergroup->group_id)->name
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
        <form method="link" action="/groups/create">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Group </button>
            </div>
        </form>
    </div>
@stop