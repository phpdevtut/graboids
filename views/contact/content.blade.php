@extends('layouts.main')

@section('content')
        <div class="contact">
            <p>You can contact us by filling out the form below:</p>
            <form>
                <div class="col-auto mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input class="form-control" name="email">
                </div>
                <div class="col-auto mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea  class="form-control" name="message"></textarea>
                </div>
                <div class="col-auto mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    <div class="clear"></div>
@endsection