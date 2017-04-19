@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Update {{ $group->name }}</h1>
            <hr>

            <form method="post" action="/groups/{{ $group->id }}">
    {{ method_field('patch') }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{-- INPUT CAMPAIGN NAME --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Name:</label>
                    </div>
                    <div class="panel-body">
                        <input class="form-control" name="name" value="{{ $group->name }}">
                    </div>
                </div>

                {{-- DESCRIPTION --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="description">Description:</label>
                    </div>
                    <div class="panel-body">
                        <input class="form-control" name="description" value="{{$group->description}}">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Update Group</button>
                </div>

                @include('layouts.back')
            </form>
        </div>
    </div>

@stop