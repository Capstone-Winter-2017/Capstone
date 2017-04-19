@extends('layouts.app')

<?php $sub = 'Character'; $model = 'characters' ?>

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{--<div> {{ var_dump($character) }} </div>--}}

            {{-- DISPLAY CHARACTER DETAILS --}}
                    <h1>Character Details</h1>
            <hr>

            @include('layouts.deletebutton')
            <hr>
            @include('layouts.updatebutton')
            <hr>

                {{--<i class="fa fa-pencil"></i>--}}

            {{-- INPUT CHARACTER NAME --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Name:</label>
                        </div>
                        <div class="panel-body">
                            {{ $character->name }}
                        </div>
                    </div>


                    {{-- DISPLAY CHARACTER  --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <label>Class:</label>
                        </div>

                        <div class="panel-body">
                                {{ $character->class }}
                        </div>
                    </div>

            {{-- DISPLAY CHARACTER  --}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>Race:</label>
                </div>

                <div class="panel-body">
                    {{ $character->race }}
                </div>
            </div>

                    {{-- BASIC INFO --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">Basic Info:</div>
                        <div class="panel-body">

                            {{-- LEVEL --}}
                            <div class="form-group">
                                <label class="control-label" for="name">Level:</label>
                                {{ $character->level }}
                            </div>

                            {{-- ALIGNMENT --}}
                            <div class="form-group">
                                <label for="sel1">Alignment:</label>
                                {{ $character->alignment }}
                            </div>

                            {{-- BACKGROUND --}}
                            <div class="form-group">
                                <label for="sel1">Background:</label>
                                {{ $character->background }}
                            </div>

                            {{-- EXPERIENCE --}}
                            <div class="form-group">
                                <label class="control-label" for="name">Experience Points:</label>
                                {{ $character->experience }}
                            </div>

                        </div>
                    </div>

                    {{-- CHARACTER STATS --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label">Character Traits:</label>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label" for="name">Strength:</label>
                                {{ $character->strength }}
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="name">Dexterity:</label>
                                {{ $character->dexterity }}
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="name">Constitution:</label>
                                {{ $character->constitution }}
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="name">Wisdom:</label>
                                {{ $character->wisdom }}
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="name">Charisma:</label>
                                {{ $character->charisma }}
                            </div>

                        </div>
                    </div>

                    {{-- ADDITIONAL INFO--}}
                    {{-- PERSONALITY TRAITS --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Personality Traits:</label>
                        </div>
                        <div class="panel-body">
                            {{ $character->personality }}
                        </div>
                    </div>


                    {{-- IDEALS --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Ideals:</label>
                        </div>
                        <div class="panel-body">
                            {{ $character->ideals }}
                        </div>
                    </div>

                    {{-- FLAWS --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Flaws:</label>
                        </div>
                        <div class="panel-body">
                            {{ $character->flaws }}
                        </div>
                    </div>

                    {{-- BONDS --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Bonds:</label>
                        </div>
                        <div class="panel-body">
                            {{ $character->bonds }}
                        </div>
                    </div>

                    {{-- FEATURES --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label class="control-label" for="name">Features:</label>
                        </div>
                        <div class="panel-body">
                            {{ $character->features }}
                        </div>
                    </div>

                </div>
            </div>

@stop