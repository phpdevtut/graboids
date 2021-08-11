@extends('layouts.main')

@section('content')
    @foreach ($hunters as $hunter)
        <div class="image">
            <img src="{{ $hunter['src'] }}" width="250"/>
        </div>
    @endforeach
    <div class="clear"></div>
@endsection