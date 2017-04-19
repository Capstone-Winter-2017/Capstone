@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{--<div> {{ var_dump($session) }} </div>--}}

                    <h1>Session Details</h1>
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

            {{--<form method="delete" route="sessions/17/destroy" class="delete-form">--}}

                <form action="" method="post" onsubmit="return confirm('Are you sure you want to submit?')">
                    {{ method_field('DELETE') }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <button type="submit" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
            </form>

                </div>
            </div>
        </div>

@stop