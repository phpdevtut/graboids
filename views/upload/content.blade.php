@extends('layouts.main')

@section('content')
    <p>Upload here:</p>
    <form>
        <div class="mb-3">
            <input type="file" id="myFile" class="form-control" name="filename">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="clear"></div>
@endsection