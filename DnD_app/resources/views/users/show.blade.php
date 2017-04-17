@extends('layouts.app')

@section('content')
    <div class="row">
           <div class="col-md-6 col-md-offset-3">
        <h1>{{ $user->name }}</h1>
               <div> {{ var_dump($user) }} </div>

        <ul class="list-group">
            @foreach ($user->characters as $character)

                <li class="list-group-item">{{ $character->name }}</li>


            @endforeach
        </ul>

               <hr>
    </div>

@stop