@extends('layouts.app')

<?php $sub = 'Group'; $model = 'groups' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Groups</h1>
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">

        @foreach (App\Group::all() as $usergroup)
            @if ($usergroup->user_id == Auth::user()->id)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Group ID: {{$usergroup->group_id}}
                    </div>
                    <div class="panel-body">
                    <a href="/groups/{{ $usergroup->group_id }}">{{
                        App\Group::findOrFail($usergroup->group_id)->name
                        }}
                        </div>
                </div>
                </a>
            @endif
        @endforeach

            @foreach (App\Group::all() as $group)
                @if ($group->created_by == Auth::user()->id)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Group ID: {{$group->id}}
                        </div>
                        <div class="panel-body">
                        <a href="/groups/{{ $group->id }}">{{
                        App\Group::findOrFail($group->id)->name
                        }}
                            </a>
                    </div>
                        </div>
                @endif
            @endforeach
    </div>

    @include('layouts.newbutton')

@stop