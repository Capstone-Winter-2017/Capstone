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
        </form>


        <br>
        <div class="row">
            <div class="col-md-offset-9">
                <button type="button" class="btn">Cancel</button>
                <button type="button" class="btn">Continue</button>
            </div>

        </div>

    </div>
@stop
