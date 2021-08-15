{{--//searches view/layouts/main.blade.php for blade queries--}}
{{--//Does this basically open layouts.main so it also gets echoed?--}}
@extends('layouts.main')

@section('content')
 {{--       @foreach (array_chunk($graboids->all(), 4) as $graboidsRow)
            <div class="row">
                @foreach ($graboidsRow as $graboid)
                    <div class="image">
                        <img src="{{ $graboid['src'] }}" />
                    </div>
                @endforeach
            </div>
        @endforeach--}}
    <div class="myGallery">
        @foreach (array_chunk($graboids, 4) as $graboidsChunk)
            <div class="row">
                @foreach ($graboidsChunk as $graboid)
                    <img src="{{ $graboid['src'] }}" />
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="clear"></div>
@endsection

