@extends('layouts.app')

<?php $sub = 'User'; $model = 'users' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>All Users</h1>
        <hr>

    @foreach ($users as $user)
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    User ID: {{$user->id}}
                    </div>
                <div class="panel-body">
            <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                </div>
            </div>
        </div>
    @endforeach

    {{--@include('layouts.newbutton')--}}

@stop