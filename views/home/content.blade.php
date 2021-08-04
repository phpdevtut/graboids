@extends('layouts.main')

@section('content')
    @foreach ($graboids as $graboid)
        <div class="image">
            <img src="{{ $graboid['src'] }}"/>
        </div>
    @endforeach
    <div class="clear"></div>
@endsection