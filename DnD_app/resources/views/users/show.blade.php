@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-md-offset-3">

    <h1>{{ $user->name }}</h1>

    <ul>
    @foreach ($user->characters as $character)
            <div>
                <li>
                    <a href="/characters/{{ $character->id }}">{{ $character->name }}</a>
                </li>
            </div>
        @endforeach
    </ul>

    </div>

@stop

