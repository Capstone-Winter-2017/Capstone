<div class="col-md-6 col-md-offset-3">
    <hr>
    <form method="link" action="/{{$model}}/create">
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">New {{$sub}} </button>
        </div>
    </form>
</div>