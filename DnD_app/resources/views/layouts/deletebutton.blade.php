<div>
    <form action="" method="post" onsubmit="return confirm('Are you sure you want to DELETE?')">
        {{ method_field('DELETE') }}

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button type="submit" class="btn btn-danger form-control">Delete</button>
    </form>
</div>