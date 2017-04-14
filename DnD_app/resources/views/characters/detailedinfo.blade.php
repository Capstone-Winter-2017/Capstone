@extends('layouts.app')

@section('content')

    <?php $lastpage = 'characters/basicinfo'?>
    <?php $nextpage = 'characters/stats'?>

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>
                Basic Info
            </h1>
            <br>
        </div>

        <form class="form-horizontal col-md-offset-2">

            <div class="form-group">
                <label for="comment">Personality Traits:</label>
                <textarea class="form-control" rows="5" id="traits"></textarea>
            </div>

            <div class="form-group">
                <label for="comment">Ideals:</label>
                <textarea class="form-control" rows="5" id="ideal"></textarea>
            </div>

            <div class="form-group">
                <label for="comment">Flaws:</label>
                <textarea class="form-control" rows="5" id="flaws"></textarea>
            </div>

            <div class="form-group">
                <label for="comment">Bonds:</label>
                <textarea class="form-control" rows="5" id="bonds"></textarea>
            </div>

            <div class="form-group">
                <label for="comment">Features:</label>
                <textarea class="form-control" rows="5" id="features"></textarea>
            </div>
        </form>
    </div>

    <div class="col-md-6 col-md-offset-3">
        @include('layouts.back_continue_cancel')

    </div>
@stop
