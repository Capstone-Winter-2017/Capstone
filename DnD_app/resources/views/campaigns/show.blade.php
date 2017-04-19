@extends('layouts.app')

<?php $sub = 'Campaign'; $model = 'campaigns' ?>

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{--<div> {{ var_dump($campaign) }} </div>--}}

                    <h1>Campaign Details</h1>

            <hr>
            @include('layouts.deletebutton')
            <hr>
            <div>
                <input type="button" class="btn btn-primary form-control" onclick="location.href='{{'/' . $model . '/' . $campaign->id . '/edit'}}'" value="Update" />
            </div>
            <hr>

                    {{-- DISPLAY NAME --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Name:</label>
                        </div>
                        <div class="panel-body">
                            {{ $campaign->name }}
                        </div>
                    </div>


                    {{-- DISPLAY DESCRIPTION --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <label>Description:</label>
                        </div>

                        <div class="panel-body">
                                {{ $campaign->description }}
                        </div>
                    </div>
@stop