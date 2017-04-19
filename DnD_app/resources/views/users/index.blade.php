@extends('layouts.app')

<?php $sub = 'User'; $model = 'users' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>All Users</h1>
        <hr>
    </div>

    @foreach ($users as $user)
        <div class="col-md-6 col-md-offset-3">
            <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
        </div>

    @endforeach

    @include('layouts.newbutton')

@stop