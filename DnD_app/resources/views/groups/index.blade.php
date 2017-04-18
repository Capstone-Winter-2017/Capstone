@extends('layouts.app')

<?php $sub = 'Group' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>All Groups</h1>
    </div>

    @foreach ($groups as $group)
        <div class="col-md-6 col-md-offset-3">

            <a href="/groups/{{ $group->id }}">{{ $group->name }}</a>
            </div>
    @endforeach

    <div class="col-md-6 col-md-offset-3">
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form method="link" action="/groups/create">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Group </button>
            </div>
        </form>
    </div>
@stop