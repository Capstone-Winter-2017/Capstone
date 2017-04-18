@extends('layouts.app')

@section('content')

    <?php $lastpage = 'campaigns/basicinfo'?>
    <?php $nextpage = 'campaigns/stats'?>

    <form class="form col-md-6 col-md-offset-3"
          method="post" action="/campaigns">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="hidden" name="user_id" value="<?php echo(Auth::user()->id) ?>">

            <h1>Create User-Campaign Connection</h1>

            {{-- INPUT CHARACTER NAME --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="user_id">User ID:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="user_id" placeholder="Enter user ID">
            </div>
        </div>

        {{-- FEATURES --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="campaign_id">Campaign ID:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="campaign_id" placeholder="Enter campaign ID">
            </div>
            </div>
        </div>

        {{-- SUBMIT FORM TO CREATE CHARACTER --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Add Campaign</button>
        </div>
    </form>

@stop