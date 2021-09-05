@extends('layouts.main')

@section('content')
    <div class=big-card style="width: 25rem;">
        @if (isset($_SESSION['is_admin']))
            <div>
                <a class="btn btn-danger" href="/graboids/{{ $graboid->id }}/delete">Delete</a>
            </div>
        @endif
        <div class="card-image">
            <img src="{{ $graboid->src }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="big-card-title">test</h5>
            <p class="big-card-text">test</p>
        </div>

    </div>

@endsection
