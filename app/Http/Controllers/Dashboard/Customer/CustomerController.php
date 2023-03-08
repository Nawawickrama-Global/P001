<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::where('deleted_at', '=', null)->get();
        return view('dashboard.customer.view', ['customers' => $customers]);
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('dashboard.customer.edit', ['customer' => $customer]);
    }
    public function delete($id)
    {
        
    }
}
