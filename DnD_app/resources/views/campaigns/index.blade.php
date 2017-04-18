@extends('layouts.app')

<?php $sub = 'Campaign' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>All Campaigns</h1>
    </div>

    @foreach ($campaigns as $campaign)
        <div class="col-md-6 col-md-offset-3">

            <a href="/campaigns/{{ $campaign->id }}">{{ $campaign->name }}</a>
            </div>
    @endforeach

    <div class="col-md-6 col-md-offset-3">
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form method="link" action="/campaigns/create">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Campaign </button>
            </div>
        </form>
    </div>
@stop