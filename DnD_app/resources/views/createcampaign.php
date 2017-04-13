@extends('layouts.app')

@section('content')

<?php $lastpage = 'createcharacter/basicinfo'?>
<?php $nextpage = 'createcharacter/stats'?>

<div class="col-md-6 col-md-offset-3">
    <div class="text-center"><h1>
            Create Campaign
        </h1>
        <br>
    </div>
</div>

<div class="col-md-6 col-md-offset-3">
    @include('layouts.back_continue_cancel')

</div>
@stop
