@extends('layouts.main')

@section('content')
    <div class="outer_form_div">
        <p>{{ $message }}</p>
        <p>{{ print_r($params) }}</p>
        <h4>Login</h4>
        <div class="inner_form">
            <form action="/admin/login.php" method="POST">
                <div class="col-auto mb-3">
                    <p>Username:</p>
                    <input class="form-control" name="username">
                </div>
                <div class="col-auto mb-3">
                    <p>Password:</p>
                    <input class="form-control" name="password">
                </div>
                <div class="col-auto mb-3">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
                <div>
                    <a href="/./register.php">Register a New Account</a>
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
@endsection