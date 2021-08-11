{{--//searches view/layouts/main.blade.php for blade queries--}}
{{--//Does this basically open layouts.main so it also gets echoed?--}}
@extends('layouts.main')

@section('content')
    @foreach ($graboids as $graboid)
            <div class="image">
                <img src="{{ $graboid['src'] }}" />
            </div>
    @endforeach
    <div class="clear"></div>
@endsection