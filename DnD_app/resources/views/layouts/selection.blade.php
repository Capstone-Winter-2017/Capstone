@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>
                <?php echo('Select a ' .  $sub)?>
            </h1>
            <br>
        </div>

        <form class="form-horizontal col-md-3">
            <div class="form-group">
                <div>
                    <label class="control-label">
                        <?php echo('Character ' .  $sub . ':')?>
                    </label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio">xx</label>
                </div>

            </div>
        </form>

        <div class="form-group col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo('[selected ' . $sub . ' name.]') ?>
                </div>
                <div class="panel-body">
                    <?php echo('[' . $sub . ' description.]') ?>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
        @include('layouts.back_continue_cancel')

    </div>
@stop
