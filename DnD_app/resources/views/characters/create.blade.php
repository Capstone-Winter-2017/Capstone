@extends('layouts.app')

@section('content')

    <?php $lastpage = 'characters/basicinfo'?>
    <?php $nextpage = 'characters/stats'?>

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>
                Character Review
            </h1>
            <br>
        </div>

        <form method="post" action="/characters">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {{--<input type="hidden" name="created_by" value="{{  }}?>">--}}

            <div class="form-group">
                <label>Name:</label>
                <textarea name="name" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Alias:</label>
                <textarea name="alias" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Add Character</button>
            </div>
        </form>
    </div>

@stop