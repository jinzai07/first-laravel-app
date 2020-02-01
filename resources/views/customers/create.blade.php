@extends('layout')
@section('title', 'Create Customer')

@section('content')
<form action="/customers" method="POST">
    @include('customers.form')
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection
