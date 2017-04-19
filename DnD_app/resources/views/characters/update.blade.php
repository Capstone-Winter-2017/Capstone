@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Update {{ $character->name }}</h1>
            <hr>

            <form method="post" action="/characters/{{ $character->id }}">
    {{ method_field('patch') }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{-- INPUT CHARACTER NAME --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Name:</label>
                    </div>
                    <div class="panel-body">
                        <input class="form-control" name="name" value="{{ $character->name }}">
                    </div>
                </div>


                {{-- SELECT CHARACTER CLASS --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="form-group">
                            <label for="sel1">Select Class:</label>
                            <select class="form-control" name="class">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>

                    <div class="panel-body">

                        {{-- DISPLAY SELECTED CLASS --}}
                        selected class description
                    </div>
                </div>

                {{-- SELECT CHARACTER RACE --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="form-group">
                            <label for="sel1">Select Race:</label>
                            <select class="form-control" name="race">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>

                    <div class="panel-body">

                        {{-- DISPLAY SELECTED RACE --}}
                        selected race description
                    </div>
                </div>

                {{-- BASIC INFO --}}
                <div class="panel panel-default">
                    <div class="panel-heading">Basic Info:</div>
                    <div class="panel-body">

                        {{-- LEVEL --}}
                        <div class="form-group">
                            <label class="control-label" for="name">Level:</label>
                            <input class="form-control" name="level" value="{{ $character->level }}">
                        </div>

                        {{-- ALIGNMENT --}}
                        <div class="form-group">
                            <label for="sel1">Alignment:</label>
                            <select class="form-control" name="alignment">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        {{-- BACKGROUND --}}
                        <div class="form-group">
                            <label for="sel1">Background:</label>
                            <select class="form-control" name="background">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        {{-- EXPERIENCE --}}
                        <div class="form-group">
                            <label class="control-label" for="name">Experience Points:</label>
                            <input class="form-control" name="experience" value="{{ $character->experience }}">
                        </div>

                    </div>
                </div>

                {{-- CHARACTER STATS --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Character Traits:</label>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="name">Strength:</label>
                            <input class="form-control" name="strength" value="{{ $character->strength }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="name">Dexterity:</label>
                            <input class="form-control" name="dexterity" value="{{ $character->dexterity }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="name">Constitution:</label>
                            <input class="form-control" name="constitution" value="{{ $character->constitution }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="name">Wisdom:</label>
                            <input class="form-control" name="wisdom" value="{{ $character->wisdom }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="name">Charisma:</label>
                            <input class="form-control" name="charisma" value="{{ $character->charisma }}">
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
                        <textarea class="form-control" rows="4" name="personality_traits" value="{{ $character->personality_traits }}"></textarea>
                    </div>
                </div>


                {{-- IDEALS --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Ideals:</label>
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" rows="4" name="ideals"></textarea>
                    </div>
                </div>

                {{-- FLAWS --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Flaws:</label>
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" rows="4" name="flaws"></textarea>
                    </div>
                </div>

                {{-- BONDS --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Bonds:</label>
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" rows="4" name="bonds"></textarea>
                    </div>
                </div>

                {{-- FEATURES --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="control-label" for="name">Features:</label>
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" rows="4" name="features"></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Update Character</button>
                </div>

                @include('layouts.back')
            </form>
        </div>
    </div>

@stop