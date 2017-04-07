@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="text-center"><h1>My Account</h1>
            <br>
        </div>

        <div class="container-fluid col-md-offset-3">
            <div class="row content">
                <div>
                    <p><label>Username:</label><label id="lblUsername"></label></p>
                    <p><label>First Name:</label><label id="lblFirstName"></label></p>
                    <p><label>Last Name:</label><label id="lblLastName"></label></p>
                    <br>
                    <p><label>Email:</label><label id="lblEmail"></label></p>
                    <p><label>Phone:</label><label id="lblPhone"></label></p>
                    <br>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="test">Edit Account Info</a>
        </div>
@stop