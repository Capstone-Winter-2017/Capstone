@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{--<div> {{ var_dump($group) }} </div>--}}

                    <h1>Group Details</h1>

                    {{-- DISPLAY CHARACTER NAME --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Name:</label>
                        </div>
                        <div class="panel-body">
                            {{ $group->name }}
                        </div>
                    </div>


                    {{-- DISPLAY CHARACTER DESCRIPTION --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <label>Description:</label>
                        </div>

                        <div class="panel-body">
                                {{ $group->description }}
                        </div>
                    </div>

            {{--<form method="delete" route="groups/17/destroy" class="delete-form">--}}

                <form action="" method="post" onsubmit="return confirm('Are you sure you want to submit?')">
                    {{ method_field('DELETE') }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <button type="submit" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
            </form>

                </div>
            </div>
        </div>

@stop