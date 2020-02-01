@extends('layout')
@section('title', 'Customers')

@section('content')
 <h4 class="text-muted">Customers list</h4>
 <div>
    <form action="customers/create">
        <input type="submit" value="Create Customer" class="btn btn-primary">
    </form>
 </div>
    <div class="row">
        <div class="col-6">
            <h4 class="text-success">Active</h4>
            <ul class="list-group">
                @foreach ($activeCustomers as $activeCustomer)
                    <li class="list-group-item"><a href="/customers/{{ $activeCustomer->id }}">{{ $activeCustomer->name }}</a> - {{ $activeCustomer->company->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <h4 class="text-danger">Inactive</h4>
            <ul class="list-group">
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li class="list-group-item"><a href="/customers/{{ $inactiveCustomer->id }}">{{ $inactiveCustomer->name }}</a> - {{ $inactiveCustomer->company->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection