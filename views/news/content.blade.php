@extends('layouts.main')

@section('content')
    <div class="outer_form_div">
        <h2>News</h2>
        <div class="inner_form">

        @foreach ($news as $new)
            <div class= "article">
            <p>{{ $new['title'] }}</p>
            <p>{{ $new['content'] }}</p>
            </div>
        @endforeach
        </div>
    </div>
    <div class="clear"></div>
@endsection

{{--
@section('content')
    @foreach
<div class="outer_form_div">
    <h2>News</h2>
        <div class="inner_form">
            <p>Some new article</p>
            <p>Some new article</p>
            <p>Some new article</p>
            <p>Some new article</p>
        </div>
</div>
    @endforeach
<div class="clear"></div>
@endsection--}}
