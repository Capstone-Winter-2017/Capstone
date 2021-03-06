@extends('layouts.app')

@section('content')

    <?php $lastpage = 'sessions/basicinfo'?>
    <?php $nextpage = 'sessions/stats'?>

    <form class="form col-md-6 col-md-offset-3"
          method="post" action="/sessions">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="hidden" name="user_id" value="<?php echo(Auth::user()->id) ?>">

        <input type="hidden" name="created_by" value="<?php echo(Auth::user()->id) ?>">

            <h1>Create Session</h1>
        <hr>

            {{-- INPUT CHARACTER NAME --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="name">Name:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="name" placeholder="Enter name">
            </div>
        </div>

        {{-- CAMPAIGN --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="campaign_id">Campaign:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="campaign_id" placeholder="Enter ID">
            </div>
        </div>

        {{-- DATETIME --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="datetime">Datetime:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="datetime" placeholder="Enter datetime">
            </div>
        </div>

        {{-- FEATURES --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="description">Description:</label>
            </div>
            <div class="panel-body">
                <textarea class="form-control" rows="4" name="description"></textarea>
            </div>
        </div>

        {{-- SUBMIT FORM TO CREATE CHARACTER --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Add Session</button>
        </div>

        @include('layouts.back')
    </form>

@stop