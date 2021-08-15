@extends('layouts.main')

@section('content')
    <div class="news">
        <h1>Add new article</h1>
        <form action="saveNewArticle.php" method="POST">
            <input name="title">
            <textarea name="news"></textarea>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="clear"></div>
@endsection