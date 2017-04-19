@extends('layouts.app')

@section('content')

    <?php $sub = 'Friend'; $model = 'friend' ?>

    <form class="form col-md-6 col-md-offset-3"
          method="post" action="/friends">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" name="user_id" value="<?php echo(Auth::user()->id) ?>">

        <input type="hidden" name="created_by" value="<?php echo(Auth::user()->id) ?>">

        <h1>Create {{$sub}}</h1>
        <hr>

        {{-- INPUT NAME --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="friend_id">Friend's ID:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="friend_id" placeholder="Enter ID">
            </div>
        </div>

        {{-- SUBMIT FORM TO CREATE CHARACTER --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Add {{$sub}}</button>
        </div>
    </form>

@stop