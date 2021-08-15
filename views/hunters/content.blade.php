@extends('layouts.main')

@section('content')
    <div class="myGallery">
    @foreach ($hunters as $hunter)
            <img src="{{ $hunter['src'] }}"/>
    @endforeach
    </div>
    <div class="clear"></div>
@endsection