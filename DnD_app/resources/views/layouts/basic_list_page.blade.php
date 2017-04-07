@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>
                <?php echo('My ' .  $sub . 's')?>
            </h1>
            <br>
        </div>

        <div class="row">
            <div class="panel panel-default col-md-6 col-md-offset-3">
                <div class="panel-body text-center">
                    <?php echo('list of ' .  $sub . 's')?>
                </div>
                <br>
                <br>
            </div>
            <div class="col-md-3"></div>
        </div>


        <div class="text-center">
            <a href="test">
                <?php echo('Create ' .  $sub)?>
            </a>
        </div>
    </div>
@stop