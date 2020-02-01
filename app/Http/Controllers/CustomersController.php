<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index() {
        $companies = Company::all();
        $activeCustomers = Customer::active();
        $inactiveCustomers = Customer::inactive();
        return view('customers.index', compact('activeCustomers', 'inactiveCustomers', 'companies'));
    }

    public function create() {
        $companies = Company::all();
        return view('customers.create', compact('companies'));
    }

    public function store() {
        $data = $this->validRequests();
        Customer::create($data);
        return redirect('customers');
    }

    public function show(Customer $customer) {
        // $customer = Customer::where('id', $customer)->firstOrFail();
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer) {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer) {
        $data = $this->validRequests();
        $customer->update($data);
        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return redirect('customers');
    }

    private function validRequests() {
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }
}
