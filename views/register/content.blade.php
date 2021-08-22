@extends('layouts.main')

@section('content')
    <div class="outer_form_div">
        <h2>Register Here</h2>
        <div class="inner_form">
            <form action="/admin/registerNewUser.php" method="POST">
                <p>Username:</p>
                <div name="title" class="col-auto mb-3">
                    <input class="form-control" name="username">
                </div>
                <p>Password:</p>
                <div class="col-auto mb-3">
                    <input  class="form-control" name="password"></input>
                </div>
                <div class="col-auto mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
@endsection