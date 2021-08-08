@extends('layouts.main')

@section('content')
    @foreach ($hunters as $hunter)
        <div class="image">
            <img src="{{ $hunter['src'] }}"/>
        </div>
    @endforeach
    <div class="clear"></div>
@endsection