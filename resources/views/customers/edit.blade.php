@extends('layout')
@section('title', 'Edit details for ' . $customer->name)

@section('content')
<h1>Edit contents for {{ $customer->name }}</h1>
<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')
    @include('customers.form')
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection
