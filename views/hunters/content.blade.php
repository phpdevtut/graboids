@extends('layouts.main')

@section('content')
    <div class="card-group">
    @foreach ($hunters as $hunter)
        <div class="card" style="width: 18rem;">
            <img src="{{ $hunter['src'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$hunter['name']}}</h5>
                <p class="card-text">{{$hunter['desc']}}</p>
                <div class="col-auto mb-3">
                    <button class="btn btn-primary" type="submit"><a href="/hunters/{{ $hunter['id'] }}">Go to hunters profile</a></button>
                </div>
{{--
                <a href="/hunters/{{ $hunter['id'] }}" class="btn btn-primary">Go to hunters profile</a>
--}}
            </div>
        </div>
    @endforeach
    </div>
    <div class="clear"></div>
@endsection