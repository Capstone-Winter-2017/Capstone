@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>Create Character</h1>
            <br>
        </div>

        <form class="form-horizontal ">
            <div class="form-group">
                <label class="control-label col-md-4">Character Name:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="character_name">
                </div>
            </div>
            <div class="form-group text-center">
                <button type="button" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>

    </div>
@stop