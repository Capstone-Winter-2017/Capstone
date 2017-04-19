@extends('layouts.app')

<?php $sub = 'Character'; $model = 'characters' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Characters</h1>
        <hr>
    </div>

    {{--@foreach ($characters as $character)--}}
        {{--<div class="col-md-6 col-md-offset-3">--}}

            {{--<a href="/characters/{{ $character->id }}">{{ $character->name }}</a>--}}
            {{--</div>--}}
    {{--@endforeach--}}

    <div class="col-md-6 col-md-offset-3">

        @foreach (App\Character::all() as $character)
            @if ($character->user_id == Auth::user()->id)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Character ID: {{$character->id}}
                    </div>
                    <div class="panel-body">
                    <a href="/characters/{{ $character->id }}">{{
                        App\Character::findOrFail($character->id)->name
                        }}
                    </div>
                </div>
                </a>
            @endif
        @endforeach



                    @include('layouts.newbutton')

                    @include('layouts.back')
    </div>


    {{--<div class="col-md-6 col-md-offset-3">--}}
        {{--@include('/layouts/modelbuttons')--}}
    {{--</div>--}}

@stop