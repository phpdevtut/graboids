@extends('layouts.main')

@section('content')
    <div class="outer_form_div">
        <h4>Edit an Article</h4>
        <div class="inner_form">
            <form action="/admin/users/{{ $user->id }}" method="POST">
                <div class="col-auto mb-3">
                    <p>ID</p>
                    <input class="form-control" name="src" value="{{ $user->username }}">
                </div>
                <div class="col-auto mb-3">
                    <p>title</p>
                    <input class="form-control" name="name" value="{{ $user->email }}">
                </div>
                <div class="col-auto mb-3">
                    <p>content</p>
                    <textarea  class="message_form" name="description">
                        {{ $user->admin }}
                    </textarea>
                </div>
                <div class="col-auto mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
@endsection