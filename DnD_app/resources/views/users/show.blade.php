@extends('layouts.app')

@section('content')

    <h1>{{ $user->name }}</h1>

    <ul>
    @foreach ($user->characters as $character)
    <li>{{ $character->name }}</li>
        @endforeach
    </ul>

@stop

