@extends('layouts.main')

@section('content')
    <div class=big-card style="width: 25rem;">
        <div class="card-image">
        <img src="{{ $hunter->src }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="big-card-title">{{ $hunter->name }}</h5>
            <p class="big-card-text">{{ $hunter->desc }}</p>
        </div>

    </div>

@endsection