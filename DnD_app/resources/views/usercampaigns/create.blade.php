@extends('layouts.app')

@section('content')

    <?php $lastpage = 'characters/basicinfo'?>
    <?php $nextpage = 'characters/stats'?>

    <form class="form col-md-6 col-md-offset-3"
          method="post" action="/usercampaigns">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" name="user_id" value="<?php echo(Auth::user()->id) ?>">

        <h1>Create User-Campaign Connection</h1>

        {{-- INPUT ID'S --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="user_id">user_id:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="user_id" placeholder="Enter name">
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="campaign_id">campaign_id:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="campaign_id" placeholder="Enter name">
            </div>
        </div>

        {{-- SUBMIT FORM TO CREATE --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Add Character</button>
        </div>
    </form>

@stop