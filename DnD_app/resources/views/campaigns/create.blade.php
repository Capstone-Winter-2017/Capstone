@extends('layouts.app')

@section('content')

    <?php $lastpage = 'campaigns/basicinfo'?>
    <?php $nextpage = 'campaigns/stats'?>

    <form class="form col-md-6 col-md-offset-3"
          method="post" action="/campaigns">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="hidden" name="user_id" value="<?php echo(Auth::user()->id) ?>">

            <h1>Create Campaign</h1>

            {{-- INPUT CHARACTER NAME --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="name">Name:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="name" placeholder="Enter name">
            </div>
        </div>

        {{-- FEATURES --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="name">Description:</label>
            </div>
            <div class="panel-body">
                <textarea class="form-control" rows="4" name="features"></textarea>
            </div>
        </div>

        {{-- SUBMIT FORM TO CREATE CHARACTER --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Add Campaign</button>
        </div>
    </form>

@stop