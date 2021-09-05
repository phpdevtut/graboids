@extends('layouts.main')

@section('content')
    <div class=big-card style="width: 25rem;">
        @if (isset($_SESSION['is_admin']))
            <div>
                <a class="btn btn-danger" href="/hunters/{{ $hunter->id }}/delete">Delete</a>
            </div>
        @endif
        <div class="card-image">
        <img src="{{ $hunter->src }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="big-card-title">{{ $hunter->name }}</h5>
            <p class="big-card-text">{{ $hunter->description }}</p>
        </div>

    </div>

@endsection
