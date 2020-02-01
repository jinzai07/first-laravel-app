@extends('layout')
@section('content')
 <h4 class="text-muted">Contact us!</h4>
    <form action="/contact" method="POST">
        <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" class="form-control">
            </div>
            <div class="text-danger">{{ $errors->first('name') }}</div>
        <label for="email">Email:</label>
            <div class="form-group">
                <input type="email" name="email" class="form-control">
            </div>
            <div class="text-danger">{{ $errors->first('email') }}</div>
        <label for="message">Message:</label>
            <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="text-danger">{{ $errors->first('message') }}</div>
        <button class="btn btn-primary" type="submit">Send!</button>
        @csrf
    </form>
@endsection