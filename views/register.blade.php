@extends('base')
@section('browsertitle')
    Acme | Register
@stop


@section('content')
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <h1>Register</h1>


            <hr>
            <form class="form-horizontal" id="registerform" method="POST" action="/register">
                <div class="form-group row">
                    <label for="first_name" class="col-sm-2 col-form-label">First name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control required" id="first_name" aria-describedby="first_name"
                               placeholder="John" name="first_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control required" id="last_name" placeholder="Doe"
                               name="last_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control required email" id="email"
                               placeholder="example@example.com" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="verify_email" class="col-sm-2 col-form-label">Verify Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="verify_email" placeholder="example@example.com"
                               name="verify_email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="******" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="verify_password" class="col-sm-2 col-form-label">Verify Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="verify_password" placeholder="******"
                               name="verify_password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
@stop

@section('bottomjs')
    <script>
        $(document).ready(function () {
            $("#registerform").validate({
                rules: {
                    verify_email: {
                        required: true,
                        email: true,
                        equalTo: "#email"
                    },
                    verify_password: {
                        required: true,
                        equalTo: "#password"
                    }
                }
            });
        })
    </script>
@stop