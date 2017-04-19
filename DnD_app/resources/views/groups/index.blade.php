@extends('layouts.app')

<?php $sub = 'Group'; $model = 'groups' ?>

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

    @include('layouts.newbutton')

@stop