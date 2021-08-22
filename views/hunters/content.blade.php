@extends('layouts.main')

@section('content')
    <div class="card-group">
    @foreach ($hunters as $hunter)
        <div class="card" style="width: 18rem;">
            <img src="{{ $hunter['src'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$hunter['hunter_name']}}</h5>
                <p class="card-text">{{$hunter['hunter_desc']}}</p>
                <a href="#" class="btn btn-primary">Go to hunters profile</a>
            </div>
        </div>
    @endforeach
    </div>
    <div class="clear"></div>
@endsection