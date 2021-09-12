@extends('layouts.main')

@section('content')
    <div class="outer_form_div">
        <h2>Register Here</h2>
        @if (!empty($_SESSION['message']))
            <div class="alert alert-warning" role="alert">
                {{ getFlash() }}
            </div>
        @endif

        <div class="inner_form">
            <form action="/register" method="POST">
                <p>Email:</p>
                <div name="title" class="col-auto mb-3">
                    <input class="form-control" name="email">
                </div>
                <p>Password:</p>
                <div class="col-auto mb-3">
                    <input class="form-control" name="password" type="password" />
                </div>
                <p>Password confirmation:</p>
                <div class="col-auto mb-3">
                    <input class="form-control" name="password_confirmation" type="password" />
                </div>
                <div class="col-auto mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
@endsection
