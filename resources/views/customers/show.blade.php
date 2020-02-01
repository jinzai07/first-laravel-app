@extends('layout')
@section('title', 'Details for ' . $customer->name)
@section('content')
    <h4 class="text-muted">Details for {{ $customer->name }}</h4>
    <form action="/customers/{{ $customer->id }}/edit">
        <input type="submit" value="Edit Customer!" class="btn btn-success">
    </form>
    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">Delete!</button>
    </form>
    <div>
        <label for="name" class="text-primary"><h4>Customer name:</h4></label>
        <p>{{ $customer->name }}</p>
    </div>
    <div>
    <label for="company" class="text-primary"><h4>Company name:</h4></label>
        <p>{{ $customer->company->name }}</p>
    </div>
    <div>
        <label for="active" class="text-primary"><h4 class="text-muted">Active/Inactive:</h4></label>
        <p>{{ $customer->active }}</p>
    </div>
@endsection