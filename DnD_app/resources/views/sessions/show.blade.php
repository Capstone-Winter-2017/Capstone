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

                    {{-- DISPLAY CHARACTER NAME --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Name:</label>
                        </div>
                        <div class="panel-body">
                            {{ $session->name }}
                        </div>
                    </div>

                    {{-- DISPLAY CHARACTER DESCRIPTION --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <label>Description:</label>
                        </div>

                        <div class="panel-body">
                                {{ $session->description }}
                        </div>
                    </div>

@stop