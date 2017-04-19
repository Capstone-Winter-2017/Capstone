@extends('layouts.app')

<?php $sub = 'Session'; $model = 'sessions' ?>

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{--<div> {{ var_dump($session) }} </div>--}}

                    <h1>Session Details</h1>
            <hr>

            @include('layouts.deletebutton')
            <hr>
            <div>
                <input type="button" class="btn btn-primary form-control" onclick="location.href='{{'/' . $model . '/' . $session->id . '/edit'}}'" value="Update" />
            </div>
            <hr>

                    {{-- DISPLAY NAME --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Name:</label>
                        </div>
                        <div class="panel-body">
                            {{ $session->name }}
                        </div>
                    </div>

                    {{-- DISPLAY DESCRIPTION --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <label>Description:</label>
                        </div>

                        <div class="panel-body">
                                {{ $session->description }}
                        </div>
                    </div>

            {{-- DISPLAY DATETIME --}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Date and Time:</label>
                </div>

                <div class="panel-body">
                    {{ $session->datetime }}
                </div>
            </div>


            {{-- DISPLAY MEMBERS --}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Session Members:</label>
                </div>
                <div class="panel-body">

                    {{-- INCLUDE CREATOR --}}
                    <a href="/users/{{ $session->created_by }}">{{
                        App\User::findOrFail($session->created_by)->name
                        }}
                </div>
                </a>

                    @foreach (App\UserSession::all() as $usersession)
                        @if ($usersession->session_id == $session->id)
                            <div>
                                <a href="/users/{{ $usersession->user_id }}">{{
                        App\User::findOrFail($usersession->user_id)->name
                        }}
                            </div>
                            </a>
    @endif
    @endforeach

@stop