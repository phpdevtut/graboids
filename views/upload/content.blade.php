@extends('layouts.main')

@section('content')
    <p>Upload here:</p>
    <form>
        <input type="file" id="myFile" name="filename">
        <input type="submit">
    </form>
    <div class="clear"></div>
@endsection