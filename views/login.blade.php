@extends('base')
@section('browsertitle')
    Acme | Login
@stop
@section('content')
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <h1>Login</h1>
            <hr>
            <form class="form-horizontal" action="/login" name="loginform" id="loginform" method="POST">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email address</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control email required" id="email" aria-describedby="emailHelp"
                               placeholder="example@example.com" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control required" id="password" placeholder="******" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-sm-2">

        </div>

    </div>
@stop

@section('bottomjs')
    <script>
        $(document).ready(function () {
            $("#loginform").validate();
        });
    </script>
@stop