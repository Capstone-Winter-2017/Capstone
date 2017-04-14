@extends('layouts.app')

@section('content')

    <?php $lastpage = 'characters/race'?>
    <?php $nextpage = 'characters/detailedinfo'?>

    <h1>Alignment Issues On This Page (cm)</h1>

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>
                Basic Info
            </h1>
            <br>
        </div>

        <form class="form-horizontal col-md-offset-2">
            <div class="form-group">
                <label class="control-label col-md-2" for="level">Level:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="level" placeholder="1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="experience">Experience:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="experience" placeholder="0">
                </div>
            </div>

            <div class="form-group form-inline">
                <label class="control-label" for="alignment">Alignment:</label>
                <select class="form-control" id="alignment">
                    <option>Lawful Good</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <div class="form-group form-inline">
                <label class="control-label" for="background">Background:</label>
                <select class="form-control" id="background">
                    <option>Chef</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        </form>


    </div>

    <div class="col-md-6 col-md-offset-3">
        @include('layouts.back_continue_cancel')

    </div>
@stop
