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
                <div>
                    <a href="/characters/{{ $character->id }}">{{
                        App\Character::findOrFail($character->id)->name
                        }}
                </div>
                </a>
            @endif
        @endforeach
    </div>

    {{--<div class="col-md-6 col-md-offset-3">--}}
        {{--@include('/layouts/modelbuttons')--}}
    {{--</div>--}}

    <div class="col-md-6 col-md-offset-3">
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form method="link" action="/characters/create">
{{--            <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Character </button>
            </div>
        </form>
    </div>
@stop