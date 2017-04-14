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

                <input type="button" class="btn" onclick="location.href='characters/class';" value="Continue" />
            </div>

            </div>

        <form method="post" action="/characters">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label>Name:</label>
                <textarea name="name" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Character</button>
            </div>
        </form>
        </div>
    </div>
@stop