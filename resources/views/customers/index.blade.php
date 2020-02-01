@extends('layout')
@section('title', 'Customers')

@section('content')
 <h1>Customers list</h1>
 <div>
     <ul>
         <li><a href="customers/create">Create Customer!</a></li>
     </ul>
 </div>
    <div class="row">
        <div class="col-6">
            <h2>Active</h2>
            <ul class="list-group">
                @foreach ($activeCustomers as $activeCustomer)
                    <li class="list-group-item"><a href="/customers/{{ $activeCustomer->id }}">{{ $activeCustomer->name }}</a> - {{ $activeCustomer->company->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <h2>Inactive</h2>
            <ul class="list-group">
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li class="list-group-item"><a href="/customers/{{ $inactiveCustomer->id }}">{{ $inactiveCustomer->name }}</a> - {{ $inactiveCustomer->company->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection