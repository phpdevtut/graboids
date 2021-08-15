@extends('layouts.main')

@section('content')
    <div class="card-group">
    @foreach ($hunters as $hunter)
        <div class="card" style="width: 18rem;">
            <img src="{{ $hunter['src'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hunter name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go to hunters profile</a>
            </div>
        </div>
    @endforeach
    </div>
    <div class="clear"></div>
@endsection