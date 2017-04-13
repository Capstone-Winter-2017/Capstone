@extends('layouts.app')

@section('content')

    <?php $lastpage = 'createcharacter/basicinfo'?>
    <?php $nextpage = 'createcharacter/stats'?>

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>
                Character Stats
            </h1>
            <br>
        </div>

        <div class="text-center">
            <p>
                <button type="button" class="btn">Randomize</button>
            </p>
        </div>

        <form class="form-horizontal col-md-offset-2">
            <div class="form-group">
                <label class="control-label col-md-2" for="strength">Strength:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="strength" placeholder="1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="wisdom">Wisdom:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="wisdom" placeholder="1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="dexterity">Dexterity:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="dexterity" placeholder="1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="constitution">Constitution:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="constitution" placeholder="1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="wisdom">Wisdom:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="wisdom" placeholder="1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="charisma">Charisma:</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="charisma" placeholder="1">
                </div>
            </div>

        </form>
    </div>

    <div class="col-md-6 col-md-offset-3">
        @include('layouts.back_continue_cancel')

    </div>
@stop
