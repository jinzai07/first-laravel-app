@extends('layout')
@section('title', 'Details for ' . $customer->name)
@section('content')
    <h1 class="text-success">Details for {{ $customer->name }}</h1>
    <ul>
        <li><a href="/customers/{{ $customer->id }}/edit">Edit Customer</a></li>
        <form action="/customers/{{ $customer->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete!</button>
        </form>
    </ul>
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