@extends('layouts.main')

@section('content')
        <div class="contact">
            <p>You can contact us by filling out the form below:</p>
            <form>
                <input name="email">
                <textarea name="message"></textarea>
                <button>Submit</button>
            </form>
        </div>
    <div class="clear"></div>
@endsection