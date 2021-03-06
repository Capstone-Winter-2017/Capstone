@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Update {{ $campaign->name }}</h1>

            <form method="post" action="/campaigns/{{ $campaign->id }}">
    {{ method_field('patch') }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="hidden" name="updated_by" value="<?php echo(Auth::user()->id) ?>">

                {{-- INPUT CAMPAIGN NAME --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Name:</label>
                    </div>
                    <div class="panel-body">
                        <input class="form-control" name="name" value="{{ $campaign->name }}">
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="description">Description:</label>
                    </div>
                    <div class="panel-body">
                        <input class="form-control" name="description" value="{{$campaign->description}}">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Update Campaign</button>
                </div>
            </form>
        </div>
    </div>
@stop