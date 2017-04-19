@extends('layouts.app')

@section('content')

    <?php $sub = 'Campaign'; $model = 'campaign' ?>

    <form class="form col-md-6 col-md-offset-3"
          method="post" action="/campaigns">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" name="user_id" value="<?php echo(Auth::user()->id) ?>">

        <h1>Create {{$sub}}</h1>
        <hr>

        {{-- INPUT NAME --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="name">Name:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="name" placeholder="Enter name">
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="control-label" for="description">Description:</label>
            </div>
            <div class="panel-body">
                <input class="form-control" name="description" placeholder="Enter name">
            </div>
        </div>

        {{-- SUBMIT FORM TO CREATE CHARACTER --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Add {{$sub}}</button>
        </div>
    </form>

@stop