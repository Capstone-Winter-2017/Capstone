@extends('layouts.app')

<?php $sub = 'Campaign'; $model = 'campaigns' ?>

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>All Campaigns</h1>
        <hr>
    </div>

    {{--@foreach ($campaigns as $campaign)--}}
        <div class="col-md-6 col-md-offset-3">

            @foreach (App\UserCampaign::all() as $usercampaign)
                    @if ($usercampaign->user_id == Auth::user()->id)
                        <div>
                    <a href="/campaigns/{{ $usercampaign->campaign_id }}">{{
                        App\Campaign::findOrFail($usercampaign->campaign_id)->name
                        }}
                        </div>
                    </a>
                @endif
            @endforeach
        </div>


    {{--@endforeach--}}

    @include('layouts.newbutton')

    {{--<div class="col-md-6 col-md-offset-3">--}}
        {{--<form method="link" action="/campaigns/create">--}}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            {{--<div class="form-group">--}}
                {{--<button type="submit" class="btn btn-primary form-control">Add Campaign </button>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}
@stop