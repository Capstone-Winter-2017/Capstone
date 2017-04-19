@extends('layouts.app')

<?php $sub = 'User'; $model = 'users' ?>

@section('content')

    <div class="col-md-6 col-md-offset-3">

    <h1>{{ $user->name }}</h1>

        @include('layouts.deletebutton')
        <hr>
        <div>
            <input type="button" class="btn btn-primary form-control" onclick="location.href='{{'/' . $model . '/' . $user->id . '/edit'}}'" value="Update" />
        </div>
        <hr>

    @foreach ($user->characters as $character)
            <div>
                    {{-- DISPLAY CHARACTER NAME --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Charater ID: {{ $character->id }}
                        <div class="panel-body">
                            <a href="/characters/{{ $character->id }}">{{ $character->name }}</a>
                        </div>
                    </div>
            </div>
        @endforeach

    </div>

@stop

